<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @include('head')
</head>
<body class="display-flex flex-row app">
@include('navbar')
<section style="height: 100vh;width: 85%;" class="d-flex flex-wrap">
    <section style="height: 90vh;width: 85%;background-color: #051127" class="">
        <div style="padding-left: 50px;padding-top: 150px" class="overflow-hidden h-100">
            <div class="h-100 scroll">
                <h1 class="text-white">Dashboard</h1>
                @include('navbarprofile')
                <hr>
                <h3 class="text-white">Utilisateurs</h3>
                @if(isset($user))
                    <form class="w-90" method="post" action="{{ url('modifyuser/'.$user->id) }}">
                        @csrf
                        <div style="margin-bottom: 20px">
                            <label>Nom / Prenom</label>
                            <input class="form-control" name="name" value="{{ $user->name }}">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Email</label>
                            <input class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>password</label>
                            <input class="form-control" name="password" >
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>confirm password</label>
                            <input class="form-control" name="confirmpassword">
                        </div>
                        <button class="btn btn-light rounded-pill" style="margin-right: 10px">Annuler</button>
                        <button class="btn btn-light rounded-pill" style="margin-left: 10px">Enregistrer</button>
                    </form>
                @else
                    <form class="w-90" method="post" action="{{ url('adminadduser') }}">
                        @csrf
                        <div style="margin-bottom: 20px">
                            <label>Nom / Prenom</label>
                            <input class="form-control" name="name">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Email</label>
                            <input class="form-control" name="email">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>confirm password</label>
                            <input type="password" class="form-control" name="confirmpassword">
                        </div>
                        <button class="btn btn-light rounded-pill" style="margin-right: 10px">Annuler</button>
                        <button class="btn btn-light rounded-pill" style="margin-left: 10px">Enregistrer</button>
                    </form>
                @endif
            </div>
        </div>
    </section>
    @include('navmenu')
    @include('player')
</section>
</body>
</html>
