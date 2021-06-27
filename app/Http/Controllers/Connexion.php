<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Cashier\Cashier;

class Connexion extends Controller
{
    public function showWelcome(){
        if (session()->has('user')){
            return redirect('home');
        };
        $news = DB::table('news')->where('publish',1)->latest('id')->limit(5)->get();
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
            session()->flash('error', 'Mauvaise information');
            return redirect('connexion');
        }
        if(Hash::check($request->password,$userExist->password)){
            $user = User::find($userExist->id);
            $userExist->subscribeNow = $user->subscribed('default');
            session(['user' => $userExist]);
        }
        else{
            session()->flash('error', 'Mauvaise information');
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

        return view('connexion')->with('success', 'Compte inscrit');
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
        $allNews = DB::table('news')->orderBy('id', 'desc')->where('date', '<=', Carbon::today())->where('publish', 1)->paginate(2);

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
        $allArtists = DB::table('artists')->get();
        $firstArray = [];
        $secondArray = [];
        $flag = false;
        foreach ($allArtists as $artist){
            if($flag){
                array_push($firstArray, $artist);
                $flag = false;
            }
            else{
                array_push($secondArray, $artist);
                $flag = true;
            }
        }
        return view('artists')->with('firstArray',$firstArray)->with('secondArray',$secondArray);
    }
    public function showArtist($id){
        $allMusic = DB::table('musics')->where('artist_id', $id)->get();
        $artist = DB::table('artists')->where('id', $id)->first();
        $album = DB::table('albums')->where('artist_id', $artist->id)->first();
        return view('artist')->with('allMusic', $allMusic)->with('album',$album)->with('artist',$artist);
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
        $allAlbums = DB::table('albums')->get();
        $allArtist = DB::table('artists')->get();
        $artists = [];
        $firstArray = [];
        $secondArray = [];
        $flag = false;
        foreach ($allAlbums as $album){
            if($flag){
                array_push($firstArray, $album);
                $flag = false;
            }
            else{
                array_push($secondArray, $album);
                $flag = true;
            }
        }
        foreach ($allArtist as $artist){
            $artists[$artist->id] = $artist;
        }
        return view('albums')->with('artists', $artists)->with('firstArray', $firstArray)->with('secondArray', $secondArray);
    }
    public function showAlbum($id){
        $allMusic = DB::table('musics')->where('album_id', $id)->get();
        $album = DB::table('albums')->where('id', $id)->first();
        $artist = DB::table('artists')->where('id', $album->artist_id)->first();
        return view('album')->with('allMusic', $allMusic)->with('album',$album)->with('artist',$artist);
    }
    public function showSearch(){
        $allGenres = DB::table('genres')->get();
        $first_array = [];
        $second_array = [];
        $flag = true;
        foreach ($allGenres as $genre){
            if ($flag){
                $first_array[$genre->id] = $genre;
            }
            else{
                $second_array[$genre->id] = $genre;
            }
        }
        return view('search')->with('first_array', $first_array)->with('second_array', $second_array);
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
            $newUser = DB::table('users')->where('id', session('user')->id)->first();
            $user = User::find($newUser->id);
            $newUser->subscribeNow = $user->subscribed('default');
            session(['user' => $newUser]);
        }
        else{
            if ($request->password==$request->confirmPassword){
                DB::table('users')->where('id', session('user')->id)->update([
                    'email' => $request->email,
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                ]);
                $newUser = DB::table('users')->where('id', session('user')->id)->first();
                $user = User::find($newUser->id);
                $newUser->subscribeNow = $user->subscribed('default');
                session(['user' => $newUser]);
            }
            else{
                return redirect('profile');
            }
        }
        return view('profile')->with('success', 'Profile mis a jour');
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
    public function searchNews(Request $request){
        $request->validate([
            'search_input' => 'required',
        ]);

        $searchNews = DB::table('news')->where('title', 'LIKE', "%{$request->search_input}%")->orWhere('full_text', 'LIKE', "%{$request->search_input}%")->paginate(2);

        if ($searchNews->total() == 0){
            $searchNews = false;
        }
        return view('searchnews')->with('searchNews', $searchNews);
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
                $request->session()->flash('error', 'Mail deja pris');
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
                $request->session()->flash('error', 'Les mots de passe ne correspondent pas');
                return redirect('formuser/'.$id);
            }
        }

        $request->session()->flash('success', 'User Modifier');
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
        session()->flash('success', 'User supprimer');
        return redirect('users');
    }

    public function showAdminArtists(){
        $allArtists = DB::table('artists')->get();
        return view('adminartists')->with('allArtists', $allArtists);
    }
    public function addAdminArtist(Request $request){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'publish' => 'required'
        ]);

        if ($request->hasFile('url')){
            $result = $request->url->storeOnCloudinaryAs('artists');
        }
        if ($result){
            DB::table('artists')->insert([
                'name' => $request->name,
                'description' => $request->description,
                'url' => $result->getSecurePath(),
                'img_id' => $result->getPublicId(),
                'publish' => $request->publish
            ]);
        }
        session()->flash('success', 'Artiste Ajouté');
        return redirect('adminartists');
    }
    public function deleteAdminArtist($id){
        $artist = DB::table('artists')->where('id',$id)->first();
        cloudinary()->destroy($artist->img_id);
        $delete = DB::table('artists')->where('id',$id)->delete();
        if ($delete){
            session()->flash('success', 'Artist Supprimer');
        }
        else{
            session()->flash('success', 'Erreur Suppresion');
        }

        return redirect('adminartists');
    }
    public function showFormArtist(){
        return view('formartist')->with('connected', true);
    }

    public function showAdminAlbums(){
        $allAlbums = DB::table('albums')->get();
        $allArtist = DB::table('artists')->get();
        $artists = [];
        foreach ($allArtist as $artist){
            $artists[$artist->id] = $artist;
        }
        return view('adminalbums')->with('artists', $artists)->with('allAlbums', $allAlbums);
    }
    public function showFormAlbum(){
        $allArtist = DB::table('artists')->get();
        return view('formalbum')->with('allArtist', $allArtist);
    }
    public function addAdminAlbum(Request $request){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'artist' => 'required',
            'url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'publish' => 'required'
        ]);

        if ($request->hasFile('url')){
            $result = $request->url->storeOnCloudinaryAs('albums');
        }
        if ($result){
            DB::table('albums')->insert([
                'title' => $request->title,
                'text_description' => $request->description,
                'date' => $request->date,
                'artist_id' => $request->artist,
                'url' => $result->getSecurePath(),
                'img_id' => $result->getPublicId(),
                'publish' => $request->publish
            ]);
        }
        session()->flash('success', 'Albums Ajouté');
        return redirect('adminalbums');
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
    public function showAdminSubscribes(){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };

        $users = DB::table('users')->get();
        $allSubscribes = DB::table('subscriptions')->get();
        $allUsers = [];
        foreach ($users as $user){
            $allUsers[$user->id] = $user;
        }
        return view('adminsubscribes')->with('allSubscribes', $allSubscribes)->with('allUsers',$allUsers);
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

        if ($request->hasFile('main_photo')){
            $result = $request->main_photo->storeOnCloudinary('youzik');
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
                'img_id' => $result->getPublicId(),
            ]);
            $request->session()->flash('success', 'News Ajouté');
        }
        else{
            $request->session()->flash('error', 'Erreur d ajout');
        }

        return redirect('adminnews');
    }
    public function modifyNewId(Request $request, $id){
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
            'main_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('main_photo')){
            $result = $request->main_photo->storeOnCloudinaryAs('youzik', $id);
        }
        else{
            $result = false;
        }
        if ($result){
            DB::table('news')->where('id', $id)->update([
                'title' => $request->title,
                'date' => $request->date,
                'text_description' => $request->text_description,
                'full_text' => $request->full_text,
                'publish' => $request->publish,
                'url' => $result->getSecurePath(),
            ]);
        }
        else{
            DB::table('news')->where('id', $id)->update([
                'title' => $request->title,
                'date' => $request->date,
                'text_description' => $request->text_description,
                'full_text' => $request->full_text,
                'publish' => $request->publish,
            ]);
        }
        $request->session()->flash('success', 'News Modifier');
        return redirect('adminnews');
    }
    public function deleteNew($id){
        if (session('user') == null){
            return redirect('');
        }
        if (session('user')->is_admin == 0){
            return redirect('home');
        };
        $news = DB::table('news')->where('id',$id)->first();
        cloudinary()->destroy($news->url);

        DB::table('news')->where('id',$id)->delete();

        session()->flash('success', 'News Supprimer');
        return redirect('adminnews');
    }

    public function showAdminGenre(){
        $allGenres = DB::table('genres')->get();
        return view('admingenres')->with('allGenres', $allGenres);
    }
    public function showFormGenre(){
        return view('formgenre')->with('connected', true);
    }
    public function addAdminGenre(Request $request){
        $request->validate([
            'title' => 'required',
        ]);

        DB::table('genres')->insert([
            'name' => $request->title
        ]);

        return redirect('admingenres');
    }

    public function showAdminMusic(){
        $allMusic = DB::table('musics')->get();
        $allGenres = DB::table('genres')->get();
        $allArtists = DB::table('artists')->get();
        $allAlbums = DB::table('albums')->get();
        $genres = [];
        $artists = [];
        $albums = [];
        foreach ($allGenres as $genre){
            $genres[$genre->id] = $genre;
        }
        foreach ($allArtists as $artist){
            $artists[$artist->id] = $artist;
        }
        foreach ($allAlbums as $album){
            $albums[$album->id] = $album;
        }
        return view('adminmusics')->with('allMusic', $allMusic)->with('genres', $genres)->with('artists', $artists)->with('albums',$albums);
    }
    public function showFormMusic(){
        $allAlbums = DB::table('albums')->get();
        $allGenres = DB::table('genres')->get();
        return view('formmusic')->with('allAlbums', $allAlbums)->with('allGenres', $allGenres);
    }
    public function addAdminMusic(Request $request){
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'publish' => 'required',
            'album' => 'required',
            'genre' => 'required',
        ]);

        if ($request->hasFile('music')){
            $result = $request->music->storeOnCloudinaryAs('music');
            $audio = new \wapmorgan\Mp3Info\Mp3Info($request->music, true);
        }
        else{
            $result = false;
        }
        if ($result){
            $album = DB::table('albums')->where('id', $request->album)->first();
            DB::table('musics')->insert([
                'title' => $request->title,
                'date' => $request->date,
                'artist_id' => $album->artist_id,
                'album_id' => $request->album,
                'genre_id' => $request->genre,
                'publish' => $request->publish,
                'url' => $result->getSecurePath(),
                'url_id' => $result->getPublicId(),
                'time' => floor($audio->duration / 60) . ':'. floor($audio->duration % 60),
            ]);
            $request->session()->flash('success', 'News Modifier');
        }
        else{
            $request->session()->flash('error', 'Music Modifier');
        }

        return redirect('adminmusic');
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
        if ($request->coupon=='WEBSTART10'){
            if ($request->id == 'price_1J2H2ZGsegk9YRQooblJfbxa'){
                $price = '8,99 €';
            }
            if ($request->id == 'price_1J2H1vGsegk9YRQoKXhtXvqW'){
                $price = '4,49 €';
            }
        }
        else{

            if ($request->id == 'price_1J2H2ZGsegk9YRQooblJfbxa'){
                $price = '9,99 €';
            }
            if ($request->id == 'price_1J2H1vGsegk9YRQoKXhtXvqW'){
                $price = '4,99 €';
            }
        }
        $userStripeCustomer = DB::table('subscriptions')->where('user_id', session('user')->id)->first();
        if ($userStripeCustomer){
            $urlSubrscribe = User::find(session('user')->id)->billingPortalUrl(route('profile'));
        }
        else{
            $urlSubrscribe = false;
        }
        $information = [
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
        ];
        $informationUser = [
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'start' => Carbon::today(),
            'last' => Carbon::today()->addMonth(),
            'prix' => $price,
        ];

        $allAdmin = DB::table('users')->where('is_admin', '=',1)->get();
        foreach ($allAdmin as $admin){
            Mail::to($admin->email)->send(new \App\Mail\subscriptionAdmin($information));
        }
        Mail::to(session('user')->email)->send(new \App\Mail\subscriptionUser($informationUser));


        return view('profile')->with('urlSubrscribe', $urlSubrscribe)->with('showModal', true)->with('lastFour', $user->pm_last_four)->with('start', Carbon::today())->with('last', Carbon::today()->addMonth())->with('price', $price);
    }
    public function showLiked(){
        return view('liked')->with('connected', true);
    }
}
