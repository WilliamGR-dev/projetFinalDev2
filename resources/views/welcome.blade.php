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
    <section style="height: 100vh" class="d-flex justify-content-center align-items-center flex-wrap">
        <div class="firstPage">
            <h1 class="slogan">Écouter,<br> ça change tout</h1>
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
    </body>
<script src="./js/connexion.js"></script>
</html>
