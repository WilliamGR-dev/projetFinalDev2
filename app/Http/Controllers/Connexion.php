<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Cashier\Cashier;

class Connexion extends Controller
{
    //
    public function showWelcome(){
        if (session()->has('user')){
            return redirect('home');
        };
        $news = DB::table('news')->where('publish',1)->inRandomOrder()->limit(5)->get();
        return view('welcome')->with('news',$news);
    }
    public function showConnexion(){
        return view('connexion');
    }
    public function connectUser(Request $request){
        if (session()->has('user')){
            return redirect('home');
        };
        $request->validate([
            'password' => 'required',
            'email' => 'required'
        ]);
        $userExist = DB::table('users')->where('email', $request->email)->first();
        if(!$userExist){
            return redirect('connexion');
        }
        if(Hash::check($request->password,$userExist->password)){
            $user = User::find($userExist->id);
            $userExist->subscribeNow = $user->subscribed('default');
            session(['user' => $userExist]) ;
        }
        else{
            return redirect('connexion');
        }
        return view('home');
    }
    public function addUser(Request $request){

        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users'
        ]);
        $password = Hash::make($request->password);
        DB::table('users')->insert([
            'name' => $request->name,
            'password' => $password,
            'email' => $request->email,
        ]);

        return view('connexion');
    }
    public function disconnectUser(){
        if (session('user') == null){
            return redirect('');
        }
        session()->forget('user');

        return redirect('/');
    }
    public function showServices(){
        if (session()->has('user')){
            return redirect('home');
        };
        return view('services');
    }
    public function showNews(){
        if (session()->has('user')){
            return redirect('home');
        };
        $allNews = DB::table('news')->where('publish', 1)->paginate(2);

        return view('news')->with('allNews', $allNews);
    }
    public function showContact(){
        return view('contact');
    }
    public function showNew($id){
        $new = DB::table('news')->where('id', $id)->first();
        return view('new')->with('new', $new);
    }
    public function showHome(){
        if (session('user') == null){
            return redirect('');
        }
        return view('home');
    }
    public function showArtists(){
        return view('artists')->with('connected', true);
    }
    public function showArtist(){
        return view('artist')->with('connected', true);
    }
    public function showPlaylists(){
        return view('playlists')->with('connected', true);
    }
    public function showPlaylist(){
        return view('playlist')->with('connected', true);
    }
    public function showRecentlyPlayed(){
        return view('recentlyplayed')->with('connected', true);
    }
    public function showAlbums(){
        return view('albums')->with('connected', true);
    }
    public function showAlbum(){
        return view('album')->with('connected', true);
    }
    public function showSearch(){
        return view('search')->with('connected', true);
    }
    public function showDashboard(){
        if (session('user') == null){
            return redirect('');
        }

        $userStripeCustomer = DB::table('subscriptions')->where('user_id', session('user')->id)->first();
        if ($userStripeCustomer){
            $urlSubrscribe = User::find(session('user')->id)->billingPortalUrl(route('profile'));
        }
        else{
            $urlSubrscribe = false;
        }
        return view('dashboard')->with('urlSubrscribe', $urlSubrscribe);
    }
    public function showUpgrade(){
        return view('upgrade');
    }
    public function showProfile(){
        if (session('user') == null){
            return redirect('');
        }
        $userStripeCustomer = DB::table('subscriptions')->where('user_id', session('user')->id)->first();
        if ($userStripeCustomer){
            $urlSubrscribe = User::find(session('user')->id)->billingPortalUrl(route('profile'));
        }
        else{
            $urlSubrscribe = false;
        }
        return view('profile')->with('urlSubrscribe', $urlSubrscribe);
    }
    public function modifyProfile(Request $request){
        if (session('user') == null){
            return redirect('');
        }
        $request->validate([
            'email' => 'required',
            'name' => 'required',
        ]);

        $user = DB::table('users')->where('id', session('user')->id)->first();
        $emailExist = DB::table('users')->where('email', $request->email)->first();
        if($emailExist){
            if ($user->email != $emailExist->email){
                return redirect('profile');
            }
        }



        if($request->password == null || $request->confirmPassword == null){
            DB::table('users')->where('id', session('user')->id)->update([
                'email' => $request->email,
                'name' => $request->name,
            ]);
            $newUser = DB::table('users')->where('email',$request->email)->first();
            session(['user'=> $newUser]);
        }
        else{
            if ($request->password==$request->confirmPassword){
                DB::table('users')->where('id', session('user')->id)->update([
                    'email' => $request->email,
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                ]);
                $newUser = DB::table('users')->where('id', session('user')->id)->first();
                session(['user'=> $newUser]);
            }
            else{
                return redirect('profile');
            }
        }
        return view('profile');
    }
    public function showUsers(){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };
        $allUsers = DB::table('users')->get();
        return view('users')->with('allUsers', $allUsers);
    }
    public function addAdminUser(Request $request){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users',
            'is_admin' => 'required'
        ]);
        $password = Hash::make($request->password);
        DB::table('users')->insert([
            'name' => $request->name,
            'password' => $password,
            'email' => $request->email,
            'is_admin' => $request->is_admin
        ]);

        return redirect('users');
    }
    public function modifyAdminUser(Request $request, $id){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'is_admin' => 'required'
        ]);

        $user = DB::table('users')->where('id', $id)->first();
        $emailExist = DB::table('users')->where('email', $request->email)->first();
        if($emailExist){
            if ($user->email != $emailExist->email){
                return redirect('formuser/'.$id);
            }
        }

        if($request->password == null || $request->confirmPassword == null){
            DB::table('users')->where('id',$id)->update([
                'email' => $request->email,
                'name' => $request->name,
                'is_admin' => $request->is_admin
            ]);
            DB::table('users')->where('id',$id)->first();
        }
        else{
            if ($request->password==$request->confirmPassword){
                DB::table('users')->where('id',$id)->update([
                    'email' => $request->email,
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                    'is_admin' => $request->is_admin
                ]);
                DB::table('users')->where('id',$id)->first();
            }
            else{
                return redirect('formuser/'.$id);
            }
        }
        return redirect('users');
    }
    public function showFormUser(){
        return view('formuser')->with('connected', true);
    }
    public function showFormModifyUser($id){

        $user = DB::table('users')->where('id', $id)->first();

        return view('formuser')->with('user', $user);
    }
    public function deleteUser($id){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };

        $delete = DB::table('users')->where('id', $id)->delete();
        return redirect('users');
    }
    public function showAdminArtists(){
        return view('adminartists')->with('connected', true);
    }
    public function showFormArtist(){
        return view('formartist')->with('connected', true);
    }
    public function showAdminAlbums(){
        return view('adminalbums')->with('connected', true);
    }
    public function showFormAlbum(){
        return view('formalbum')->with('connected', true);
    }
    public function showAdminNews(){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };

        $allNews = DB::table('news')->get();

        return view('adminnews')->with('allNews', $allNews);
    }
    public function showFormNew(){
        return view('formnews')->with('connected', true);
    }
    public function showFormNewId($id){
        $new = DB::table('news')->where('id',$id)->first();
        return view('formnews')->with('new', $new);
    }
    public function addNew(Request $request){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };

        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'text_description' => 'required',
            'full_text' => 'required',
            'publish' => 'required',
            'main_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $countNews = DB::table('news')->latest('id')->first();


        if ($request->hasFile('main_photo')){
            $result = $request->main_photo->storeOnCloudinaryAs('youzik', $countNews->id+1);
        }
        if ($result){
            DB::table('news')->insert([
                'title' => $request->title,
                'date' => $request->date,
                'text_description' => $request->text_description,
                'full_text' => $request->full_text,
                'publish' => $request->publish,
                'autor' => session('user')->name,
                'url' => $result->getSecurePath(),
            ]);
        }

        return redirect('adminnews');
    }
    public function deleteNew($id){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };

        DB::table('news')->where('id',$id)->delete();
        return redirect('adminnews');
    }
    public function showAdminMusic(){
        return view('adminmusics')->with('connected', true);
    }
    public function showFormMusic(){
        return view('formmusic')->with('connected', true);
    }
    public function showSubscribe(){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->subscribeNow == true){
            return redirect('profile');
        }

        return view('subscribe')->with('connected', true);
    }
    public function showPlans(){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->subscribeNow == true){
            return redirect('profile');
        }

        return view('plans')->with('connected', true);
    }
    public function showInformations($id){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->subscribeNow == true){
            return redirect('profile');
        }

        return view('informations')->with('connected', true)->with('id', $id);
    }
    public function showCGU($id){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->subscribeNow == true){
            return redirect('profile');
        }

        if ($id == 'price_1J2H1vGsegk9YRQoKXhtXvqW' || $id == 'price_1J2H2ZGsegk9YRQooblJfbxa'){
            if ($id == 'price_1J2H1vGsegk9YRQoKXhtXvqW'){
                $plan = [
                    'id' => 'price_1J2H1vGsegk9YRQoKXhtXvqW',
                    'name'=> 'personnel',
                    'price'=> '4,99',
                ];
            }
            else{
                $plan = [
                    'id' => 'price_1J2H2ZGsegk9YRQooblJfbxa',
                    'name'=> 'famille',
                    'price'=> '9,99',
                ];

            }
        }
        else{
           return redirect('profile');
        }

        $user = User::find(session('user')->id);
        $intent = $user->createSetupIntent();
        return view('cgu')->with('intent', $intent)->with('plan', $plan);
    }
    public function checkoutPayement(Request $request){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->subscribeNow == true){
            return redirect('profile');
        }
        $user = User::find(session('user')->id);
        try {
            $subscription = $user
                ->newSubscription('default', $request->id)
                ->withCoupon($request->coupon)
                ->create($request->payment_method);
        } catch (IncompletePayment $e) {
            return redirect()->route('cashier.payment', [
                $e->payment->id, 'redirect' => route('payments.error')
            ]);
        }
        $userExist = DB::table('users')->where('id', session('user')->id)->first();
        $user = User::find(session('user')->id);
        $userExist->subscribeNow = $user->subscribed('default');
        session(['user' => $userExist]);

        return redirect('profile')->with('showModal', true);
    }
    public function showLiked(){
        return view('liked')->with('connected', true);
    }
}
