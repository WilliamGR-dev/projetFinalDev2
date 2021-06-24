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
                            @if(session('user')->subscribeNow != true)
                            <div class="w-100 p-4 d-flex justify-content-end" style="background-color: #34465F;width: 100%;margin-top: -100px">
                                <a href="{{ url('upgrade') }}" class="btn btn-light rounded-pill text-decoration-none text-dark">Abonnement</a>
                            </div>
                            @else
                            <div class="w-100 p-4 d-flex justify-content-end" style="background-color: #34465F;width: 100%;margin-top: -100px">
                                <a href="{{ $urlSubrscribe }}" class="btn btn-light rounded-pill text-decoration-none text-dark">Gerer Abonnement</a>
                            </div>
                            @endif
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

    @if(isset($showModal))
    <div class="position-absolute vh-100 vw-100" style="display: block;background-color: rgba(0,0,0,0.5)" onclick="closeModal()" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLongTitle">Payement Effectué</h1>
                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>Votre abonnement est desormais actif</h1>
                    <h4>Montant de l’abonnement: {{ $price }}</h4>
                    <h4>Date de l’abonnement : {{ $start }}</h4>
                    <h4>4 derniers chiffres de la carte bancaire utilisée : {{ $lastFour }}</h4>
                    <h4>Date du renouvellement : {{ $last }}</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openModal() {
            document.getElementById("exampleModalCenter").style.display = "block"
            document.getElementById("exampleModalCenter").classList.add("show")
        }
        function closeModal() {
            document.getElementById("exampleModalCenter").style.display = "none"
            document.getElementById("exampleModalCenter").classList.remove("show")
        }
        // Get the modal
        var modal = document.getElementById('exampleModalCenter');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal()
            }
        }
    </script>
    @endif
    </body>
</html>
