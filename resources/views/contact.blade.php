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
    <section style="height: 90vh;margin-top: 18vh" class="d-flex flex-column">
        <h1 class="slogan fw-bold text-white">Contact</h1>
        <div class="d-flex flex-row">
            <div class="w-25 d-flex flex-column p-5 pt-1">
                <div class="mb-4 w-100">
                    <h3 class="mb-5">User Location</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.356464221067!2d2.3608514156748086!3d48.87048077928862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e0950555883%3A0x25e6ea66d950d9ec!2s19%20Rue%20Yves%20Toudic%2C%2075010%20Paris!5e0!3m2!1sfr!2sfr!4v1623764727299!5m2!1sfr!2sfr" class="w-100" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="mt-4 w-100">
                    <h3 class="mb-4">Youzik Information</h3>
                    <div class="card text-dark p-5" style="padding-left: 30px !important;padding-top: 30px !important;border-radius: 22px">
                        <span>WebStart</span>
                        <span>19 rue Yves Toudic</span>
                        <span>75010 Paris</span>
                        <span>France</span>
                        <span>Tel : 01 42 41 97 76</span>
                    </div>
                </div>
            </div>
            <div class="card bg-transparent border-0 w-75 p-5 pt-1">
                <div class="card-body p-0" id="login">
                    <form action="{{ url('contact') }}" method="post" class="d-flex flex-column text">
                        @csrf
                        <input type="text" class="input mt-3 text-white" name="first_name" placeholder="PRENOM">
                        <input type="text" class="input mt-3 text-white" name="last_name" placeholder="NOM">
                        <input type="email" class="input mt-3 text-white" name="email" placeholder="EMAIL">
                        <input type="text" class="input mt-3 text-white" name="object" placeholder="OBJECT">
                        <textarea class="form-control text-area text-white" style="background: rgba(255,255,255,0.09)" rows="7" name="message" placeholder="MESSAGE"></textarea>
                        <button href="#" class="btn btn-primary w-25 m-auto p-3 rounded-pill mt-3 fw-bold" style="background: linear-gradient(300deg, #5500C9, #2b8bfa);border: none">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </body>
</html>
