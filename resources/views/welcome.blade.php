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
        <div class="firstPage justify-content-center">
            <div class="position-absolute text-center">
                <h1 class="slogan text-white fw-bold">Écouter,<br> ça change tout</h1>
                <span class="text-center text-white">Des millions de titres et de podcasts. Aucune carte de crédit nécessaire.</span>
            </div>

            <img class="h-100 vw-100" src="./img/landingPage.png">
        </div>
        <div class="services" style="margin-top: 200px">
            <div class="w-100 d-flex justify-content-center align-content-center flex-row">
                <div class="w-50 d-flex justify-content-center">
                    <img src="./img/phone.png">
                </div>
                <div class="w-50">
                    <div><h1>YouZik, c'est quoi ?</h1></div>
                    <div class="d-flex w-100 flex-wrap">
                        <div class="m-5 w-30 ml-0">
                            YouZik, c'est quoi ?<br><br>
                            Parmi 73 millions de titres, retrouvez de vieilles connaissances et laissez-vous séduire par de nouveaux coups de cœur.
                        </div>
                        <div class="m-5 w-30 ml-0">
                            YouZik, c'est quoi ?<br><br>
                            Parmi 73 millions de titres, retrouvez de vieilles connaissances et laissez-vous séduire par de nouveaux coups de cœur.
                        </div>
                        <div class="m-5 w-30 ml-0">
                            YouZik, c'est quoi ?<br><br>
                            Parmi 73 millions de titres, retrouvez de vieilles connaissances et laissez-vous séduire par de nouveaux coups de cœur.
                        </div>
                        <div class="m-5 w-30 ml-0">
                            YouZik, c'est quoi ?<br><br>
                            Parmi 73 millions de titres, retrouvez de vieilles connaissances et laissez-vous séduire par de nouveaux coups de cœur.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sectionNews">
            <h2>Actualité</h2>
            <div class="news">
                <div class="card"  >
                    <img  src="https://picsum.photos/1000/1000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card"  >
                    <img  src="https://picsum.photos/1000/1000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card"  >
                    <img  src="https://picsum.photos/1000/1000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card"  >
                    <img  src="https://picsum.photos/1000/1000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card"  >
                    <img  src="https://picsum.photos/1000/1000" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    </body>
<script src="./js/connexion.js"></script>
</html>
