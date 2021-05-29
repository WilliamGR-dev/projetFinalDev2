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
        <div class="card card-connexion position-absolute bg-transparent border-0">
            <div class="card-body" id="login">
                <h5 class="card-title text-center title-connexion text-white">Connexion</h5>
                <button type="button" class="form_select btn btn-primary button-select" name="login" onclick="showLogin()">Login</button>
                <button type="button" class="form_select btn btn-primary button-unselect" name="register" onclick="showRegister()">Register</button>
                <form action="{{ url('azf') }}" method="post" class="d-flex flex-column">
                    @csrf
                    <input type="email" class="input mt-3" name="email" placeholder="Entrée votre email">
                    <input type="password" class="input mt-3" name="password" placeholder="Entrée votre mot de passe">
                    <button href="#" class="btn btn-primary w-25 m-auto mt-3">Connexion</button>
                </form>
            </div>
            <div class="card-body" id="register" style="display: none">
                <h5 class="card-title text-center title-connexion text-white">Inscription</h5>
                <button class="form_select btn btn-primary button-unselect" name="login" onclick="showLogin()">Login</button>
                <button class="form_select btn btn-primary button-select" name="register" onclick="showRegister()">Register</button>
                <form action="{{ url('azf') }}" method="post" class="d-flex flex-column">
                    @csrf
                    <input type="email" class="input mt-3" name="email" placeholder="Entrée votre email">
                    <input type="password" class="input mt-3" name="password" placeholder="Entrée votre mot de passe">
                    <button href="#" class="btn btn-primary w-25 m-auto mt-3">Inscription</button>
                </form>
            </div>
        </div>
        <img class="vw-100" src="./img/connexionPage.png">
    </section>
    </body>
<script src="./js/connexion.js"></script>
</html>
