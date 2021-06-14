<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('head')
    </head>
    <body class="display-flex flex-row app">
    <section style="height: 100vh;width: 100%;" class="d-flex flex-wrap">
        <section style="height: 100vh;width: 100%;background-color: #051127" class="">
            <div style="padding-left: 50px;padding-top: 150px" class="overflow-hidden h-100">
                <div class="h-100 scroll">
                    @include('navbarprofile')
                    <hr>
                    <h3 class="text-white" style="margin-top: 100px">Informations Clients</h3>
                    <form class="w-100 d-flex flex-wrap">
                        <div class="m-3" style="width: 40%; margin-bottom: 20px">
                            <label>Prenom</label>
                            <input class="form-control">
                        </div>
                        <div class="m-3" style="width: 40%;margin-bottom: 20px">
                            <label>Nom</label>
                            <input class="form-control">
                        </div>
                        <div class="m-3" style="width: 82%;margin-bottom: 20px">
                            <label>Adresse</label>
                            <input class="form-control">
                        </div>
                        <div class="m-3" style="width: 40%;margin-bottom: 20px">
                            <label>Pays</label>
                            <input class="form-control">
                        </div>
                        <div class="m-3" style="width: 40%;margin-bottom: 20px">
                            <label>Ville</label>
                            <input class="form-control">
                        </div>
                        <div class="m-3" style="width: 40%;margin-bottom: 20px">
                            <label>Code Postal</label>
                            <input class="form-control">
                        </div>
                        <div class="m-3" style="width: 40%;margin-bottom: 20px">
                            <label>Numero de telephone</label>
                            <input class="form-control">
                        </div>
                        <div class="d-flex justify-content-end" style="width: 83%">
                            <button class="btn btn-light rounded-pill w-25 mt-4 p-3" style="margin-right: 10px">Annuler</button>
                            <a href="{{ url('cgu') }}" class="btn btn-light rounded-pill w-25 mt-4 p-3" style="margin-left: 10px">Enregistrer</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
    </body>
</html>
