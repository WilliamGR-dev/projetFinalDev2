<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @include('head')
</head>
<body class="overflow-x-hidden">
<div class="firstPage justify-content-start" >
    <div class="position-absolute" style="padding-left: 250px">
        <h1 class="fw-bold" style="color: #5006A3">ILLIMITÉ</h1>
        <h1 class="sloganService text-white fw-bold mt-3 mb-3">Passer en Premium<br>Soyez heureux</h1>
        <a class="btn btn-light rounded-pill text-white mt-4" href="{{ url('plans') }}" style="background-color: #5006A3;border-color: #5006A3">OBTENEZ LE PREMIUM</a>
    </div>

    <img class="vh-100 vw-100" src="./img/servicePage.png">
</div>
</body>
<script src="./js/connexion.js"></script>
</html>
