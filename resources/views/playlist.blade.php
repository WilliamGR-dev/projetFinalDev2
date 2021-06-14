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
                <div class="h-100">
                    <div class="d-flex">
                        <div class="" style="margin-right: 15px">
                            <img src="./img/musicHit.png">
                        </div>
                        <div class="" style="margin-left: 15px">
                            <h1 class="text-white fw-light mb-2">NOM PLAYLIST</h1>
                            <div class="mt-2 mb-2">
                                <span>Une de vos playlists</span><br>
                                <span>Créé par vous. 175 chansons. 10 heures 52 minutes</span>
                            </div>
                            <div class="mt-2 mb-2 d-flex">
                                <button class="btn btn-outline-light fw-bold w-25 rounded-pill" style="margin-right: 15px;">PLAY</button>
                                <div style="margin-right: 15px; margin-left: 15px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                                        <g id="Groupe_141" data-name="Groupe 141" transform="translate(-715 -540)">
                                            <g id="Groupe_140" data-name="Groupe 140" transform="translate(-169 255.22)">
                                                <g id="Group_22" data-name="Group 22" transform="translate(896.32 298)">
                                                    <path id="Shape" d="M12.937,24.339h0l-2.323-2.325A70.664,70.664,0,0,1,3.032,14.67C.963,12.153,0,9.886,0,7.536A7.444,7.444,0,0,1,7.538,0a8.137,8.137,0,0,1,5.4,2.108A8.144,8.144,0,0,1,18.334,0a7.452,7.452,0,0,1,7.542,7.536c0,2.35-.963,4.616-3.032,7.134a70.816,70.816,0,0,1-7.581,7.344l-2.325,2.325ZM7.539,1.88A5.533,5.533,0,0,0,1.882,7.536c0,4.047,3.613,7.439,10,13.087l.042.039,1.014,1.017,1.036-1.034.022-.02c6.387-5.649,10-9.042,10-13.087a5.533,5.533,0,0,0-5.658-5.656,6.3,6.3,0,0,0-4.681,2.186l-.719.846-.717-.848A6.3,6.3,0,0,0,7.539,1.88Z" transform="translate(0 0)" fill="#fff"/>
                                                </g>
                                                <path id="Tracé_4" data-name="Tracé 4" d="M-4935.858,2006.489l-.517-.885-2.344-.561v-.23l-2.591-.465-2.886.465-1.909,1.164-1.434,2.095-.2,2.267,1.629,5.135,2.793,3.166,2.607,2.514,2.607,2.514,2.239,2.188,2.789-2.793,3.166-2.653,2.281-2.374,2.414-2.889,1.5-4.807-.978-3.291a13.35,13.35,0,0,0-1.536-2,2.98,2.98,0,0,0-1.95-.7l-2.211-.419h-1.892l-1.629.885-1.536.791Z" transform="translate(5845.117 -1704.875)" fill="#fff"/>
                                            </g>
                                            <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(715 540)" fill="none" stroke="#fff" stroke-width="1">
                                                <circle cx="25" cy="25" r="25" stroke="none"/>
                                                <circle cx="25" cy="25" r="24.5" fill="none"/>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div style="position: relative;height: 100%;overflow: auto;display: block;" class="scroll">
                        <table  class="table table-striped table-hover text-white">
                            <thead>
                            <tr>
                                <th scope="col">TITRE</th>
                                <th scope="col">ARTISTE</th>
                                <th scope="col">ALBUM</th>
                                <th scope="col">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17.917" height="20" viewBox="0 0 17.917 20">
                                        <image id="NoPath" width="17.917" height="20" xlink:href="data:image/png;base64,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"/>
                                    </svg>
                                </th>
                                <th scope="col">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <g id="Groupe_142" data-name="Groupe 142" transform="translate(-588 -658)">
                                            <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(588 658)" fill="none" stroke="#fff" stroke-width="1">
                                                <circle cx="10" cy="10" r="10" stroke="none"/>
                                                <circle cx="10" cy="10" r="9.5" fill="none"/>
                                            </g>
                                            <path id="Tracé_5" data-name="Tracé 5" d="M0,0H.513V6.756H0Z" transform="translate(597 663)" fill="#fff"/>
                                            <path id="Tracé_6" data-name="Tracé 6" d="M0,0H.513V6.922H0Z" transform="translate(604.435 669.244) rotate(90)" fill="#fff"/>
                                        </g>
                                    </svg>
                                </th>
                                <th scope="col">
                                    ACTIONS
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr class="text-white">
                                <td>Can I be him</td>
                                <td>James Arthur</td>
                                <td>Back from Past</td>
                                <td>2019-01-15</td>
                                <td>4:07</td>
                                <td>
                                    <div class="d-flex">
                                        <div style="margin-left: 15px;margin-right: 15px">
                                            <i class="bi bi-arrow-down-circle"></i>
                                        </div>
                                        <div style="margin-left: 15px;margin-right: 15px">
                                            <i class="bi bi-heart"></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        @include('navmenu')
        @include('player')
    </section>
    </body>
</html>
