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
                    <h1 class="text-white">Profile</h1>
                    @include('navbarprofile')
                    <hr>
                    <div class="rounded" style="border: 2px solid #707070; margin-right: 50px;width: 90%">
                        <div  class="mb-5">
                            <div class="d-flex" style="padding-left: 30px;padding-top: 30px">
                                <div class="bg-info" style="width: 150px;height: 150px"></div>
                                <div class="text-white" style="margin-left: 50px"><h1>{{ session('user')->name }}</h1></div>
                            </div>
                            <div class="w-100 p-4 d-flex justify-content-end" style="background-color: #34465F;width: 100%;margin-top: -100px">
                                <a href="{{ url('subscribe') }}" class="btn btn-light rounded-pill text-decoration-none text-dark">Abonnement</a>
                            </div>
                            <div class="w-100 p-4 d-flex justify-content-end" style="background-color: #34465F;width: 100%;margin-top: -100px">
                                <a href="{{ \App\Models\User::find(session('user')->id)->billingPortalUrl(route('account') }}" class="btn btn-light rounded-pill text-decoration-none text-dark">Gerer Abonnement</a>
                            </div>
                        </div>
                        <form class="d-flex flex-wrap w-100" method="post" action="{{url('profile')}}">
                            @csrf
                            <div class="w-50 p-4 " style="padding: 0 100px 30px 0">
                                <label>Nom Prenom</label>
                                <input class="form-control " name="name" value="{{ session('user')->name }}">
                            </div>
                            <div class="w-50 p-4 " style="padding: 0 100px 30px 0">
                                <label>Email</label>
                                <input class="form-control " name="email" value="{{ session('user')->email }}">
                            </div>
                            <div class="w-50 p-4 " style="padding: 0 100px 30px 0">
                                <label>Password</label>
                                <input class="form-control " name="password" placeholder="">
                            </div>
                            <div class="w-50 p-4 " style="padding: 0 100px 30px 0">
                                <label>Confirme Password</label>
                                <input class="form-control " name="confirmPassword" placeholder="">
                            </div>
                            <button class=" m-4 p-2 btn btn-outline-light border-0 rounded-pill w-25 fw-bold" style="background: linear-gradient(to left, #1ED761, #1E64D7);color: black">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @include('navmenu')
        @include('player')
    </section>
    </body>
</html>
