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
                <div class="h-100 scroll">
                    <h1 class="text-white">Artistes</h1>
                    @include('navbarprofile')
                    <hr>
                    <div class="rounded" style="border: 2px solid #707070; margin-right: 50px;width: 90%">
                        <div  class="mb-5">
                            <div class="d-flex" style="padding-left: 30px;padding-top: 30px">
                                <div class="bg-info" style="width: 150px;height: 150px"></div>
                                <div class="text-white" style="margin-left: 50px"><h1>Prenom Nom</h1></div>
                            </div>
                            <div class="w-100 p-4 d-flex justify-content-end" style="background-color: #34465F;width: 100%;margin-top: -100px">
                                <button class="btn btn-light rounded-pill">Abonnement</button>
                            </div>
                        </div>
                        <form class="d-flex flex-wrap w-100">
                            <div class="w-50 p-4 " style="padding: 0 100px 30px 0">
                                <label>Nom</label>
                                <input class="form-control " name="lastname">
                            </div>
                            <div class="w-50 p-4 " style="padding: 0 100px 30px 0">
                                <label>Prenom</label>
                                <input class="form-control " name="lastname">
                            </div>
                            <div class="w-50 p-4 " style="padding: 0 100px 30px 0">
                                <label>Password</label>
                                <input class="form-control " name="lastname">
                            </div>
                            <div class="w-50 p-4 " style="padding: 0 100px 30px 0">
                                <label>Confirme Password</label>
                                <input class="form-control " name="lastname">
                            </div>
                            <button class=" m-4 p-2 btn btn-outline-light border-0 rounded-pill w-25 fw-bold" style="background: linear-gradient(to left, #1ED761, #1E64D7);color: black">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section style="height: 90vh;width: 15%;background-color: #182131" class="">
            <div class="h-50">
                <div class="w-100 d-flex justify-content-evenly align-items-center" style="padding-top: 15px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
                        <circle id="Oval_4" data-name="Oval 4" cx="17.5" cy="17.5" r="17.5" fill="#616161"/>
                    </svg>
                    <span>Enura Indula</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.408" height="10.204" viewBox="0 0 16.408 10.204">
                        <path id="Stroke_2_Copy_2" data-name="Stroke 2 Copy 2" d="M0,15,9,7.5,0,0" transform="translate(15.704 0.704) rotate(90)" fill="none" stroke="#e1e1e1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                    </svg>
                </div>
            </div>
            <div class="text-center">
                <div>
                    <a class="btn btn-light rounded-pill fw-bold w-75" style="background: linear-gradient(to left, #1E64D7, #1ED761);border: none" href="#">UPGRADE</a>
                </div>
            </div>
        </section>
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
