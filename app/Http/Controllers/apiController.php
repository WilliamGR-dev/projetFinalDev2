<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class apiController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user =  User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
        ]);

        $token = $user->createToken( $request->device_name)->plainTextToken;

        return response()->json([
            'token' => $token,
            'email' => $user->email,
            'password' => $user->password,
            'name' => $user->name,
            'created_at' => $user->created_at,
        ]);

    }

    public function modifyProfile(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'email' => 'required',
            'name' => 'required',
        ]);

        $user = DB::table('users')->where('id', $request->id)->first();
        $emailExist = DB::table('users')->where('email', $request->email)->first();
        if($emailExist){
            if ($user->email != $emailExist->email){
                return response()->json([
                    'error' => 'Email deja utilisé'
                ]);
            }
        }

        if($request->password == null || $request->confirmPassword == null){
            DB::table('users')->where('id', $request->id)->update([
                'email' => $request->email,
                'name' => $request->name,
            ]);
            $newUser = DB::table('users')->where('email',$request->email)->first();
        }
        else{
            if ($request->password==$request->confirmPassword){
                DB::table('users')->where('id', $request->id)->update([
                    'email' => $request->email,
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                ]);
                $newUser = DB::table('users')->where('id', $request->id)->first();
            }
            else{
                return response()->json([
                    'error' => 'les mdp ne correspondent pas'
                ]);
            }
        }
        return response()->json([
            'success' => 'Modifier',
            'user' => $newUser
        ]);

    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error'=>'The provided credentials are incorrect.'], 401);
        }

        $isSubscribe = $user->subscribed('default');

        $user->tokens()->where('tokenable_id', $user->id)->delete();

        $token = $user->createToken( $request->email)->plainTextToken;

        return response()->json([
            'token' => $token,
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'created_at' => $user->created_at,
            'is_admin' => $user->is_admin,
            'is_subscribe' => $isSubscribe,
        ]);
    }

    public function showNews(){
        $allNews = DB::table('news')->where('publish', 1)->paginate(2);

        return response()->json([
            'allNews' => $allNews,
        ]);
    }

    public function showNew($id){
        $new = DB::table('news')->where('id', $id)->first();

        return response()->json([
            'new' => $new,
        ]);
    }

    public function showAllNews(){
        $allNews = DB::table('news')->where('publish', 1)->get();

        return response()->json([
            'allNews' => $allNews,
        ]);
    }

    public function sendMail(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'object' => 'required',
            'message' => 'required',
        ]);

        $information = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'object' => $request->object,
            'message' => $request->message,
        ];

        Mail::to(request('email'))->send(new \App\Mail\contact($information));
        return response()->json([
            'success' => 'mail Send',
        ]);
    }

    public function intent(Request $request)
    {
        $user = User::find($request->id);

        return response()->json($user->createSetupIntent());
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'payment_method' => 'required',
            'plan' => 'required',
            'coupon' => 'nullable'
        ]);

        $user = User::find($request->id);

        try {
            $subscription = $user
                ->newSubscription('default', $request->plan)
                ->withCoupon($request->coupon)
                ->create($request->payment_method);

            $isSubscribe = $user->subscribed('default');
            return response()->json($isSubscribe);
        } catch (\Laravel\Cashier\Exceptions\IncompletePayment $e) {
            return response()->json($e->payment);
        }
    }

    public function profileUrl(Request $request){

        $userStripeCustomer = DB::table('subscriptions')->where('user_id', $request->id)->first();
        if ($userStripeCustomer){
            $urlSubrscribe = User::find($request->id)->billingPortalUrl('https://projectfinalionic.herokuapp.com/');
        }
        else{
            $urlSubrscribe = false;
        }

        return response()->json([
            'url' => $urlSubrscribe,
        ]);
    }
}
