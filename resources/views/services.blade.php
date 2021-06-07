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
    <section class="d-flex justify-content-center align-items-center flex-wrap w-90 m-auto">
        <div class="firstPage justify-content-start" ><div class="position-absolute" style="padding-left: 250px">
                <h1 class="fw-bold" style="color: #5006A3">ILLIMITÉ</h1>
                <h1 class="sloganService text-white fw-bold mt-3 mb-3">Passer en Premium<br>Soyez heureux</h1>
                <button class="btn btn-light rounded-pill text-white mt-4" style="background-color: #5006A3;border-color: #5006A3">OBTENEZ LE PREMIUM</button>
            </div>

            <img class="h-100 vw-100" src="./img/servicePage.png">
        </div>

        <div style="height: 100vh; margin-top: 10vh;" class="card-deck mb-3 text-center w-100 d-flex flex-row flex-wrap align-items-center justify-content-evenly">
            <table class="table table-borderless">
                <tr class="text-white">
                    <td></td>
                    <td class="bg-info">PERSONNEL</td>
                    <td class="bg-pink">FAMILLE</td>
                </tr>
                <tr>
                    <td class="text-white">50 millions de chansons et toute votre bibliothèque YouZik<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Écoutez en ligne ou hors-ligne<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Ecouter de la musique et des vidéos musicales sans publicité<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Téléchargez des chansons dans votre bibliothèque<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Accès sur vos appareils<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Voyez ce que vos amis écoutent<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Spectacles originaux, concerts et exclusivités<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Émissions de radio Beats 1 en direct et en ligne<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Accédez à jusqu'à six personnes<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Un compte personnel à chaque membre de la famille<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Partager ce que vous voulez, quand vous voulez - ou pas du tout<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white">Partage des achats de musique YouZik<div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                    <td class="bg-pink"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                        </svg><div class="w-100 border-bottom border-dark mt-2"></div></td>
                </tr>
                <tr>
                    <td class="text-white"></td>
                    <td class="bg-info">4,99€/mois</td>
                    <td class="bg-pink">9,99€/mois</td>
                </tr>
                <tr>
                    <td class="text-white"></td>
                    <td class="bg-info"><button class="btn btn-light w-75 rounded-pill">ACHETER<br>MAINENANT</button></td>
                    <td class="bg-pink"><button class="btn btn-light w-75 rounded-pill">ACHETER<br>MAINENANT</button></td>
                </tr>

            </table>
        </div>
    </section>
    @include('footer')
    </body>
<script src="./js/connexion.js"></script>
</html>
