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
    public function checkIsConnected(){
        if (session('user') == null){
            return redirect('');
        }
    }
    public function checkIsAdmin(){
        if (session('user')->is_admin == 0){
            return redirect('home');
        }
    }
    public function showWelcome(){
        $news = DB::table('news')->where('publish',1)->inRandomOrder()->limit(5)->get();
        return view('welcome')->with('news',$news);
    }
    public function showConnexion(){
        return view('connexion');
    }
    public function connectUser(Request $request){
        $request->validate([
            'password' => 'required',
            'email' => 'required'
        ]);
        $userExist = DB::table('users')->where('email', $request->email)->first();
        if(!$userExist){
            return redirect('connexion');
        }
        if(Hash::check($request->password,$userExist->password)){
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
            'email' => $request->email
        ]);

        return view('connexion');
    }
    public function disconnectUser(){
        $this->checkIsConnected();
        session()->forget('user');

        return redirect('/');
    }
    public function showServices(){
        return view('services');
    }
    public function showNews(){
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
        $this->checkIsConnected();
        return view('home')->with('connected', true);
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
        return view('dashboard')->with('connected', true);
    }
    public function showUpgrade(){
        return view('upgrade');
    }
    public function showProfile(){
        $this->checkIsConnected();
        return view('profile');
    }
    public function modifyProfile(Request $request){
        $this->checkIsConnected();
        $request->validate([
            'email' => 'required',
            'name' => 'required',
        ]);

        if($request->password == null || $request->confirmPassword == null){
            DB::table('users')->update([
                'email' => $request->email,
                'name' => $request->name,
            ]);
            $newUser = DB::table('users')->where('email',$request->email)->first();
            session(['user'=> $newUser]);
        }
        else{
            if ($request->password==$request->confirmPassword){
                DB::table('users')->update([
                    'email' => $request->email,
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                ]);
                $newUser = DB::table('users')->where('email',$request->email)->first();
                session(['user'=> $newUser]);
            }
            else{
                return view('profile');
            }
        }
        return view('profile');
    }
    public function showUsers(){
        $this->checkIsConnected();
        $this->checkIsAdmin();
        $allUsers = DB::table('users')->get();
        return view('users')->with('allUsers', $allUsers);
    }
    public function addAdminUser(Request $request){
        $this->checkIsConnected();
        $this->checkIsAdmin();
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users'
        ]);
        $password = Hash::make($request->password);
        DB::table('users')->insert([
            'name' => $request->name,
            'password' => $password,
            'email' => $request->email
        ]);

        return redirect('users');
    }
    public function modifyAdminUser(Request $request, $id){
        $this->checkIsConnected();
        $this->checkIsAdmin();
        $request->validate([
            'email' => 'required',
            'name' => 'required',
        ]);

        if($request->password == null || $request->confirmPassword == null){
            DB::table('users')->update([
                'email' => $request->email,
                'name' => $request->name,
            ]);
            DB::table('users')->where('id',$id)->first();
        }
        else{
            if ($request->password==$request->confirmPassword){
                DB::table('users')->update([
                    'email' => $request->email,
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
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
        $this->checkIsConnected();
        $this->checkIsAdmin();

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
        $this->checkIsConnected();
        $this->checkIsAdmin();

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
        $this->checkIsConnected();
        $this->checkIsAdmin();

        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'text_description' => 'required',
            'full_text' => 'required',
            'publish' => 'required',
        ]);

        DB::table('news')->insert([
            'title' => $request->title,
            'date' => $request->date,
            'text_description' => $request->text_description,
            'full_text' => $request->full_text,
            'publish' => $request->publish,
        ]);
        return redirect('adminnews');
    }
    public function deleteNew($id){
        $this->checkIsConnected();
        $this->checkIsAdmin();

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
        return view('subscribe')->with('connected', true);
    }
    public function showPlans(){
        return view('plans')->with('connected', true);
    }
    public function showInformations(){
        return view('informations')->with('connected', true);
    }
    public function showCGU(Request $request){
        dd($request);
        $user = User::find(session('user')->id);
        $user->createAsStripeCustomer();
        return view('cgu')->with('connected', true);
    }
    public function showLiked(){
        return view('liked')->with('connected', true);
    }
}
