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
    <section class="d-flex justify-content-center align-items-center w-90 m-auto">
        <div style="margin-top: 20vh" class="w-100 d-flex flex-wrap align-items-center justify-content-center">
            <h1 class="slogan text-white">Actualités</h1>
            @foreach ($allNews as $news)
                <div class="w-100 d-flex align-items-center flex-column">
                    <div class="w-75 d-flex flex-row justify-content-between mt-5 mb-5" style="background-color: rgba(112,112,112,0.2)">
                        <img class="w-30" src="https://picsum.photos/1000/1000">
                        <div class="p-3 w-100 d-flex flex-column justify-content-around">
                            <div class="d-flex w-100 justify-content-between ">
                                <h1 class="text-white"> {{ $news->title }}</h1>
                                <span class="text-white">{{ $news->date }}</span>
                            </div>
                            <div class="d-flex w-100 ">
                                <h4 class="text-white">{{ $news->text_description }}</h4>
                            </div>
                            <div class="d-flex w-100 justify-content-end">
                                <a href="{{ url('/new/'. $news->id) }}" class="btn btn-info rounded-pill fw-bold" style="background: linear-gradient(to left, #1E64D7, #1ED761);">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $allNews->links() }}
        </div>
    </section>
    @include('footer')
    </body>
<script src="./js/connexion.js"></script>
</html>
