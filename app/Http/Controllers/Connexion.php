<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Connexion extends Controller
{
    //
    public function showConnexion(){
        return view('connexion');
    }
    public function showServices(){
        return view('services');
    }
    public function showNews(){
        return view('news');
    }
    public function showContact(){
        return view('contact');
    }
    public function showNew(){
        return view('new');
    }
    public function showHome(){
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
        return view('profile')->with('connected', true);
    }
    public function showUsers(){
        return view('users')->with('connected', true);
    }
    public function showFormUser(){
        return view('formuser')->with('connected', true);
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
    public function showCGU(){
        return view('cgu')->with('connected', true);
    }
}
