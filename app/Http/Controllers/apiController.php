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

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error'=>'The provided credentials are incorrect.'], 401);
        }

        $user->tokens()->where('tokenable_id', $user->id)->delete();

        $token = $user->createToken( $request->email)->plainTextToken;

        return response()->json([
            'token' => $token,
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'created_at' => $user->created_at,
            'is_admin' => $user->is_admin,
        ]);
    }

    public function showNews(){
        $allNews = DB::table('news')->where('publish', 1)->paginate(2);

        return response()->json([
            'allNews' => $allNews,
        ]);
    }

    function sendMail(Request $request){
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
}
