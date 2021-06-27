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
                <div class="h-100 scroll" style="overflow-y: scroll;">
                    <h1 class="text-white">Artists</h1>
                    @include('navbarprofile')
                    <hr>
                    <div>
                        <h3>Ajouter un artists</h3>
                        <a href="{{ url('formartist') }}" class="btn btn-light text-dark text-decoration-none">Ajouter</a>
                    </div>
                    @include('errors')
                    <table class="w-90 table table-striped table-light table-hover" style="margin-top: 50px">
                        <thead>
                        <tr>
                            <td>NOM</td>
                            <td>PRENOM</td>
                            <td>EMAIL</td>
                            <td>ACTIONS</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($allArtists as $artist)
                            <tr>
                                <td>{{ $artist->name  }}</td>
                                <td>{{ $artist->description }}</td>
                                <td>@if($artist->publish==1)Publier @else Non publier @endif</td>
                                <td>
                                    <div class="d-flex flex-row">
                                        <div style="margin: 0 10px"><a href="{{ url('/modifyartist/'.$artist->id) }}">Modifier</a></div>
                                        <div style="margin: 0 10px"><a href="{{ url('/deleteartist/'.$artist->id) }}">Supprimer</a></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        @include('navmenu')
        @include('player')
    </section>
    </body>
</html>
