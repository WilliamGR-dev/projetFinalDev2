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
    <section style="height: 100vh;width: 85%;" class="d-flex flex-wrap">
        <section style="height: 90vh;width: 85%;background-color: #051127" class="">
            <div style="padding-left: 50px;padding-top: 150px" class="overflow-hidden h-100">
                <div class="h-100 scroll">
                    <h1 class="text-white">Dashboard</h1>
                    @include('navbarprofile')
                    <hr>
                    <h3 class="text-white">Artist</h3>
                    <form method="post" action="{{url('/addartist')}}" class="w-90" enctype="multipart/form-data">
                        @csrf
                        <div style="margin-bottom: 20px">
                            <label>Name</label>
                            <input class="form-control" name="name" type="text">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Description</label>
                            <input class="form-control" name="description" type="text">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Url</label>
                            <input class="form-control" name="url" type="file">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Publish</label>
                            <select name="publish">
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                            </select>
                        </div>
                        <button class="btn btn-light rounded-pill" style="margin-left: 10px">Enregistrer</button>
                    </form>
                </div>
            </div>
        </section>
        @include('navmenu')
        @include('player')
    </section>
    </body>
</html>
