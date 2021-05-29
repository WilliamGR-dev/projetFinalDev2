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
        <div class="w-100 d-flex flex-wrap align-items-center justify-content-center">
            <div class="card service-card">
                <div class="card-body">
                    <h5 class="card-title p-3">Personnel</h5>
                    <h6 class="card-subtitle p-3 mb-2 text-muted">9,99 €/mois après la période de l'offre</h6>
                    <p class="card-text p-3">Écoutez votre musique sans coupures pub<br>

                        Écoutez votre musique partout - même hors connexion<br>

                        Musique à la demande<br></p>
                    <a href="#" class="btn btn-primary m-3">Commencer</a>
                </div>
            </div>
            <div class="card service-card">
                <div class="card-body">
                    <h5 class="card-title p-3">Personnel</h5>
                    <h6 class="card-subtitle p-3 mb-2 text-muted">9,99 €/mois après la période de l'offre</h6>
                    <p class="card-text p-3">Écoutez votre musique sans coupures pub<br>

                        Écoutez votre musique partout - même hors connexion<br>

                        Musique à la demande<br></p>
                    <a href="#" class="btn btn-primary m-3">Commencer</a>
                </div>
            </div>
            <div class="card service-card">
                <div class="card-body">
                    <h5 class="card-title p-3">Personnel</h5>
                    <h6 class="card-subtitle p-3 mb-2 text-muted">9,99 €/mois après la période de l'offre</h6>
                    <p class="card-text p-3">Écoutez votre musique sans coupures pub<br>

                        Écoutez votre musique partout - même hors connexion<br>

                        Musique à la demande<br></p>
                    <a href="#" class="btn btn-primary m-3">Commencer</a>
                </div>
            </div>
        </div>
    </section>
    </body>
<script src="./js/connexion.js"></script>
</html>
