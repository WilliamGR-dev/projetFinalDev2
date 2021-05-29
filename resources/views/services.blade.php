<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('head')
    </head>
    <body>
    @include('navbar')
    <section style="height: 100vh" class="d-flex justify-content-center align-items-center">
        <div class="card card-connexion">
            <div class="card-body" id="login">
                <h5 class="card-title text-center title-connexion">Connexion</h5>
                <button type="button" class="form_select btn btn-primary button-select" name="login" onclick="showLogin()">Login</button>
                <button type="button" class="form_select btn btn-primary button-unselect" name="register" onclick="showRegister()">Register</button>
                <form action="{{ url('azf') }}" method="post" class="d-flex flex-column">
                    @csrf
                    <input type="email" class="input" name="email" placeholder="Entrée votre email">
                    <input type="password" class="input" name="password" placeholder="Entrée votre mot de passe">
                    <button href="#" class="btn btn-primary">Connexion</button>
                </form>
            </div>
            <div class="card-body" id="register" style="display: none">
                <h5 class="card-title text-center title-connexion">Inscription</h5>
                <button class="form_select btn btn-primary button-unselect" name="login" onclick="showLogin()">Login</button>
                <button class="form_select btn btn-primary button-select" name="register" onclick="showRegister()">Register</button>
                <form action="{{ url('azf') }}" method="post" class="d-flex flex-column">
                    @csrf
                    <input type="email" class="input" name="email" placeholder="Entrée votre email">
                    <input type="password" class="input" name="password" placeholder="Entrée votre mot de passe">
                    <button href="#" class="btn btn-primary">Inscription</button>
                </form>
            </div>
        </div>
    </section>
    </body>
<script src="./js/connexion.js"></script>
</html>
