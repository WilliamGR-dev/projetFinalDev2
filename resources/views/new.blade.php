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
            <div class="w-100 d-flex align-items-center flex-column">
                <div class="w-75 d-flex flex-row justify-content-between mt-5 mb-5 flex-lg-row flex-md-column flex-sm-column" style="background-color: rgba(112,112,112,0.10)">
                    <img class="w-30" src="https://picsum.photos/1000/1000">
                    <div class="p-3 w-100 d-flex flex-column justify-content-around">
                        <div class="d-flex w-100 justify-content-between mb-4">
                            <h1 class="text-white">{{ $new->title }}</h1>
                            <span class="text-white">{{ $new->date }}</span>
                        </div>
                        <div class="d-flex w-100 ">
                            <h4 class="text-white">
                                {{ $new->full_text }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    </body>
<script src="/js/connexion.js"></script>
</html>
