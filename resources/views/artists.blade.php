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
                    <h1 class="text-white">Artistes</h1>
                    <h4 class="text-white">Pas juste un autre lundi maniaque.</h4>
                    <hr>
                    <div style="overflow-x: scroll" class="scroll">
                        <div style="width: 100%;" class="d-flex mt-3 mb-3 text-center">
                            @foreach($firstArray as $artist)
                                <a href="{{ url('artist/'.$artist->id) }}" class="text-decoration-none text-white" style="width: 225px;margin-left: 15px;margin-right: 15px">
                                    <div>
                                        <img src="{{ $artist->url }}">
                                    </div>
                                    <div class="text-white w-100 mt-3 fw-bold">{{ $artist->name }}</div>
                                    <div class="text-white w-100 mt-3 ">20 Musiques</div>
                                </a>
                            @endforeach
                        </div>
                        <div style="width: 100%;" class="d-flex mt-3 mb-3 text-center">
                            @foreach($secondArray as $artist)
                                <a href="{{ url('artist/'.$artist->id) }}" class="text-decoration-none text-white" style="width: 225px;margin-left: 15px;margin-right: 15px">
                                    <div>
                                        <img src="./img/artist.png">
                                    </div>
                                    <div class="text-white w-100 mt-3 fw-bold">{{ $artist->name }}</div>
                                    <div class="text-white w-100 mt-3 ">20 Musiques</div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('navmenu')
        @include('player')
    </section>
    </body>
</html>
