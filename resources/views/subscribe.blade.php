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
    <section style="height: 100vh;width: 100%;" class="d-flex flex-wrap">
        <section style="height: 90vh;width: 85%;background-color: #051127" class="">
            <div style="padding-left: 50px;padding-top: 150px" class="overflow-hidden h-100">
                <div class="h-100 scroll">
                    <h1 class="text-white">Dashboard</h1>
                    @include('navbarprofile')
                    <hr>
                    <h3 class="text-white">Abonnement</h3>
                    <div>
                        <div class=" border" style="border-radius: 15px;width: 95%;">
                            <div class="w-100 bg-dark p-2"  style="border-top-left-radius: 15px;border-top-right-radius: 15px">Abonnement</div>
                            <div class="d-flex flex-md-wrap flex-lg-nowrap flex-sm-wrap">
                                <div class="w-75 d-flex flex-wrap p-2 subscribe" style="margin: 10px 0 10px 10px;border-right: white 2px solid">
                                    <div class="w-50">
                                        <div class="mb-4">Debut d'abonnement</div>
                                        <div class="mb-4">Fin d'abonnement</div>
                                        <div class="mb-4">Type d'abonnement</div>
                                        <div class="mb-4">Renouvelement</div>
                                    </div>
                                    <div class="w-50">
                                        <div>Abonement</div>
                                        <div class="w-50 rounded d-flex flex-column justify-content-center align-items-center" style="background: linear-gradient(to left, #1E64D7, #1ED761);">
                                            <h5 class="text-white" style=" padding: 30px 30px 0 30px">PERSONNEL</h5>
                                            <h5 class="text-white" style=" padding: 0 30px 30px 30px">4,99€/mois</h5>
                                        </div>
                                    </div>
                                    <div class="w-100 d-flex" style="margin-left: 50px">
                                        <button class="text-white fw-bold btn btn-light bg-transparent" style="margin-right: 10px">Annuler</button>
                                        <button class="text-white fw-bold btn btn-light bg-transparent" style="margin-left: 10px">Mettre en pause</button>
                                    </div>
                                </div>
                                <div class="w-25 p-2 subscribe">
                                    <div>
                                        <div>Le prochain abonnement sera
                                            renouveler?</div>
                                        <div>
                                            <input class="form-check" type="checkbox">
                                            <div>Oui</div>
                                        </div>
                                        <div>
                                            <input class="form-check" type="checkbox">
                                            <div>Non</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button  class="btn btn-light border-0 rounded-pill mt-3 w-25 p-3 fw-bold text-white" style="background: linear-gradient(to left, #1E64D7, #1ED761);">Enregistrer</button>
                    </div>
                </div>
            </div>
        </section>
        @include('navmenu')
        @include('player')
    </section>
    </body>
</html>
