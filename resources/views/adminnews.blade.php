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
                <h1 class="text-white">News</h1>
                @include('navbarprofile')
                <hr>
                <div>
                    <h3>Ajouter une news</h3>
                    <a href="{{ url('formnew') }}" class="btn btn-light text-dark text-decoration-none">Ajouter</a>
                </div>
                <table class="w-90 table table-striped table-light table-hover" style="margin-top: 50px">
                    <thead>
                    <tr>
                        <td>Titre</td>
                        <td>Description</td>
                        <td>Date de creation</td>
                        <td>Publier</td>
                        <td>Auteur</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allNews as $news)
                        <tr>
                            <td>{{ $news->title }}</td>
                            <td>{{ $news->text_description }}</td>
                            <td>{{ $news->date }}</td>
                            <td>@if($news->publish == 1) Publier @else Non Publier @endif</td>
                            <td>{{ $news->autor }}</td>
                            <td>
                                <div class="d-flex flex-row">
                                    <div style="margin: 0 10px"><a href="{{ url('modifynews/'.$news->id) }}">Modifier</a></div>
                                    <div style="margin: 0 10px"><a href="{{ url('deletenews/'.$news->id) }}">Supprimer</a></div>
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
