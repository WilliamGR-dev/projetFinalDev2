<nav class="navbar navbar-expand-lg navbar-light p-4 fixed-top w-90 m-auto">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"><h2>Spotify</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('news')}}">Actualités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center" style="width: 100%;justify-content: flex-end;">
                <li>
                    <div class="searchbar">
                        <input class="search_input" type="text" name="" placeholder="Search...">
                        <a href="#" class="search_icon"><i class="bi bi-search"></i></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('connexion') }}">Connexion / Inscription</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
