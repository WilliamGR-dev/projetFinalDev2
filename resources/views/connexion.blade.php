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
            @include('errors')
            <div class="card-body" @if(isset($register)) style="display: none" @endif id="login">
                <h5 class="card-title text-center title-connexion text-white">Connexion</h5>
                <button type="button" class="form_select btn btn-primary button-select" name="login" onclick="showLogin()">Login</button>
                <button type="button" class="form_select btn btn-primary button-unselect" name="register" onclick="showRegister()">Register</button>
                <form action="{{ url('login') }}" method="post" class="d-flex flex-column">
                    @csrf
                    <input type="email" class="input mt-3" name="email" placeholder="Entrée votre email">
                    <input type="password" class="input mt-3" name="password" placeholder="Entrée votre mot de passe">
                    <button class="btn btn-primary w-25 m-auto mt-3">Connexion</button>
                </form>
            </div>
            <div class="card-body" @if(!isset($register)) style="display: none" @endif id="register">
                <h5 class="card-title text-center title-connexion text-white">Inscription</h5>
                <button class="form_select btn btn-primary button-unselect" name="login" onclick="showLogin()">Login</button>
                <button class="form_select btn btn-primary button-select" name="register" onclick="showRegister()">Register</button>
                <form action="{{ url('register') }}" method="post" class="d-flex flex-column">
                    @csrf
                    <input type="name" class="input mt-3" name="name" placeholder="Prénom Nom">
                    <input type="email" class="input mt-3" name="email" placeholder="Entrée votre email">
                    <input type="password" class="input mt-3" name="password" placeholder="Entrée votre mot de passe">
                    <button type="submit" class="btn btn-primary w-25 m-auto mt-3">Inscription</button>
                </form>
            </div>
        </div>
        <img class="bg-connexion" style="object-fit: cover;" src="./img/connexionPage.png">
    </section>
    </body>
<script src="./js/connexion.js"></script>
</html>
