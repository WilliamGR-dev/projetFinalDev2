<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('head')
    </head>
    <body class="d-flex flex-row app">
    @include('navbar')
    <section style="height: 100vh;width: 100%;" class="d-flex flex-wrap">
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
        <section class="d-flex align-items-center justify-content-between" style="height: 10vh;width: 100%;background-color: #020917;padding-left: 50px;padding-right: 250px">
            <div class="d-flex align-items-center">
                <div style="margin-right: 10px;margin-left: 10px;">
                    <a>
                        <svg id="Group_21" data-name="Group 21" xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14">
                            <path id="Shape" d="M7.5,0a.66.66,0,0,0-.682.636V6.364H.682a.638.638,0,1,0,0,1.273H6.818v5.727a.683.683,0,0,0,1.364,0V7.636h6.136a.638.638,0,1,0,0-1.273H8.182V.636A.66.66,0,0,0,7.5,0Z" fill="#ababab"/>
                        </svg>
                    </a>
                </div>
                <div style="margin-right: 10px;margin-left: 10px;">
                    <a>
                        Heena Maka<br>Harshadewa FT. Ravi Jay
                    </a>
                </div>
                <div style="margin-right: 10px;margin-left: 10px;">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14.109" viewBox="0 0 15 14.109">
                            <path id="Shape" d="M7.5,14.109h0L6.152,12.761A40.963,40.963,0,0,1,1.758,8.5,6.465,6.465,0,0,1,0,4.369,4.315,4.315,0,0,1,4.37,0,4.717,4.717,0,0,1,7.5,1.222,4.721,4.721,0,0,1,10.628,0,4.32,4.32,0,0,1,15,4.369,6.465,6.465,0,0,1,13.243,8.5a41.051,41.051,0,0,1-4.395,4.257L7.5,14.109ZM4.37,1.09a3.207,3.207,0,0,0-3.28,3.279c0,2.346,2.095,4.312,5.8,7.586l.024.022.588.59.6-.6.013-.012c3.7-3.275,5.8-5.242,5.8-7.586a3.207,3.207,0,0,0-3.28-3.279A3.655,3.655,0,0,0,7.916,2.358l-.417.49-.416-.491A3.649,3.649,0,0,0,4.37,1.09Z" fill="#ababab"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-25 d-flex align-items-center justify-content-between">
                <a>
                    <svg id="Shuffle" xmlns="http://www.w3.org/2000/svg" width="14.149" height="10.657" viewBox="0 0 14.149 10.657">
                        <path id="Fill_1" data-name="Fill 1" d="M.5,1a3.013,3.013,0,0,1,1.942.673l1.024.878a.5.5,0,1,0,.651-.759L3.094.915A4.021,4.021,0,0,0,.5,0a.5.5,0,0,0,0,1" transform="translate(0 1.329)" fill="#b3b3b3"/>
                        <path id="Fill_3" data-name="Fill 3" d="M11.314,2.331,11.3,3.657l2.853-1.79L11.345,0l-.017,1.33a4.022,4.022,0,0,0-2.577.913L2.442,7.655A3.01,3.01,0,0,1,.5,8.329a.5.5,0,0,0,0,1,4.027,4.027,0,0,0,2.594-.915L9.4,3a3.006,3.006,0,0,1,1.911-.671" fill="#b3b3b3"/>
                        <path id="Fill_5" data-name="Fill 5" d="M3.792,1.685a3.012,3.012,0,0,1-1.925-.672L.826.121A.5.5,0,1,0,.175.879l1.041.893a4.017,4.017,0,0,0,2.562.912L3.761,4.015l2.852-1.79L3.81.358Z" transform="translate(7.536 6.642)" fill="#b3b3b3"/>
                    </svg>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                        <path id="Backward" d="M8,0V4L0,0V10L8,6v4h2V0Z" transform="translate(10 10) rotate(180)" fill="#b3b3b3"/>
                    </svg>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40.322" height="40.322" viewBox="0 0 40.322 40.322">
                        <circle id="Oval" cx="19.5" cy="19.5" r="19.5" transform="translate(0.661 0.661)" fill="none" stroke="#b3b3b3" stroke-miterlimit="10" stroke-width="1.322"/>
                        <rect id="Rectangle" width="3" height="17" rx="1.5" transform="translate(14.661 11.661)" fill="#d8d8d8"/>
                        <rect id="Rectangle_Copy" data-name="Rectangle Copy" width="3" height="17" rx="1.5" transform="translate(22.661 11.661)" fill="#d8d8d8"/>
                    </svg>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                        <path id="Forward" d="M8,0V4L0,0V10L8,6v4h2V0Z" fill="#b3b3b3"/>
                    </svg>
                </a>
                <a>
                    <svg id="Repeat" xmlns="http://www.w3.org/2000/svg" width="13.364" height="11.762" viewBox="0 0 13.364 11.762">
                        <path id="Fill_1" data-name="Fill 1" d="M11.675.37a.5.5,0,1,0-.965.26A3.505,3.505,0,0,1,7.328,5.037h-4.5V3.708L0,5.537,2.828,7.365V6.037h4.5A4.5,4.5,0,0,0,11.675.37" transform="translate(1.536 4.396)" fill="#b3b3b3"/>
                        <path id="Fill_3" data-name="Fill 3" d="M1,5.829a3.5,3.5,0,0,1,3.5-3.5H9V3.658l2.828-1.829L9,0V1.329H4.5A4.5,4.5,0,0,0,.153,7a.5.5,0,0,0,.483.37.534.534,0,0,0,.13-.017.5.5,0,0,0,.352-.613A3.526,3.526,0,0,1,1,5.829" fill="#b3b3b3"/>
                    </svg>
                </a>
            </div>
            <div>
                <a>
                    <svg id="Devices_Available" data-name="Devices Available" xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13">
                        <path id="Fill_1" data-name="Fill 1" d="M0,0V10H6V9H1V1H6V0Z" transform="translate(0 0)" fill="#b3b3b3"/>
                        <path id="Fill_2" data-name="Fill 2" d="M0,1H3V0H0Z" transform="translate(3 12)" fill="#b3b3b3"/>
                        <path id="Fill_3" data-name="Fill 3" d="M8,13H0V0H8V13ZM1,1V12H7V1Z" transform="translate(8)" fill="#b3b3b3"/>
                        <path id="Fill_4" data-name="Fill 4" d="M0,1H2V0H0Z" transform="translate(11 3)" fill="#b3b3b3"/>
                        <path id="Fill_5" data-name="Fill 5" d="M2,4A2,2,0,1,1,4,2,2,2,0,0,1,2,4ZM2,1A1,1,0,1,0,3,2,1,1,0,0,0,2,1Z" transform="translate(10 6)" fill="#b3b3b3"/>
                    </svg>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.882" height="12.414" viewBox="0 0 13.882 12.414">
                        <g id="Volume" transform="translate(0.5 0.707)">
                            <path id="Stroke_1" data-name="Stroke 1" d="M6,10,3,7H0V3H3L6,0Z" transform="translate(0 0.5)" fill="none" stroke="#b3b3b3" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="Stroke_3" data-name="Stroke 3" d="M0,11A7.777,7.777,0,0,0,0,0" transform="translate(10.604)" fill="none" stroke="#b3b3b3" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                            <path id="Stroke_5" data-name="Stroke 5" d="M0,6A4.242,4.242,0,0,0,0,0" transform="translate(9.121 2.5)" fill="none" stroke="#b3b3b3" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                        </g>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="72.003" height="4" viewBox="0 0 72.003 4">
                        <rect id="Sound" width="72.003" height="4" rx="2" fill="#b3b3b3"/>
                    </svg>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                        <g id="Queue" transform="translate(0 0)">
                            <path id="Fill_1" data-name="Fill 1" d="M0,0V5.832L4.7,2.915Z" transform="translate(0 0)" fill="#d8d8d8"/>
                            <path id="Fill_2" data-name="Fill 2" d="M0,1.167H8.5V0H0Z" transform="translate(8.5 3.5)" fill="#d8d8d8"/>
                            <path id="Fill_3" data-name="Fill 3" d="M0,1.168H17V0H0Z" transform="translate(0 8.165)" fill="#d8d8d8"/>
                            <path id="Fill_4" data-name="Fill 4" d="M0,1.167H17V0H0Z" transform="translate(0 12.833)" fill="#d8d8d8"/>
                        </g>
                    </svg>
                </a>
            </div>
        </section>
    </section>
    </body>
</html>
