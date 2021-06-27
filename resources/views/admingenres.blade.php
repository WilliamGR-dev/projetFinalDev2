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
                <h1 class="text-white">Genre</h1>
                @include('navbarprofile')
                <hr>
                <div>
                    <h3>Ajouter un genre</h3>
                    <a href="{{ url('formgenre') }}" class="btn btn-light text-dark text-decoration-none">Ajouter</a>
                </div>
                <table class="w-90 table table-striped table-light table-hover" style="margin-top: 50px">
                    <thead>
                    <tr>
                        <td>Genre</td>
                        <td>ACTIONS</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allGenres as $genre)
                        <tr>
                            <td>{{ $genre->name }}</td>
                            <td>
                                <div class="d-flex flex-row">
                                    <div style="margin: 0 10px"><a>Modifier</a></div>
                                    <div style="margin: 0 10px"><a>Supprimer</a></div>
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
