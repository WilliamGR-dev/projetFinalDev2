<div>
    <a href="{{ url('dashboard') }}" class="text-white text-decoration-none" style="margin-right: 10px">My dashboard</a>
    <a href="{{ url('profile') }}" class="text-white text-decoration-none" style="margin-left: 10px;margin-right: 10px">My Profile</a>
    @if(session('user')->is_admin == 1)
        <a href="{{ url('users') }}" class="text-white text-decoration-none" style="margin-left: 10px;margin-right: 10px">Utilisateurs</a>
        <a href="{{ url('adminartists') }}" class="text-white text-decoration-none" style="margin-left: 10px;margin-right: 10px">Artistes</a>
        <a href="{{ url('adminalbums') }}" class="text-white text-decoration-none" style="margin-left: 10px;margin-right: 10px">Albums</a>
        <a href="{{ url('adminmusic') }}" class="text-white text-decoration-none" style="margin-left: 10px;margin-right: 10px">Musique</a>
        <a href="{{ url('adminnews') }}" class="text-white text-decoration-none" style="margin-left: 10px;margin-right: 10px">News</a>
    @endif
</div>
