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
                <div class="w-75 d-flex flex-row justify-content-between mt-5 mb-5" style="background-color: rgba(112,112,112,0.10)">
                    <img class="w-30" src="https://picsum.photos/1000/1000">
                    <div class="p-3 w-100 d-flex flex-column justify-content-around">
                        <div class="d-flex w-100 justify-content-between mb-4">
                            <h1 class="text-white">Titre</h1>
                            <span class="text-white">18/05/2021</span>
                        </div>
                        <div class="d-flex w-100 ">
                            <h4 class="text-white" style="font-size: 18px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum elit vel sem blandit posuere. Quisque facilisis laoreet pretium. Donec egestas eros quam, id molestie ante efficitur ut. Vestibulum suscipit mattis ex id posuere. Sed mollis enim dui, et efficitur quam eleifend ac. Nulla non convallis ex, a imperdiet mi. Aenean at magna id ligula dapibus ullamcorper in ac purus. Proin vulputate efficitur varius. Proin malesuada interdum maximus. In dapibus ipsum eget lectus volutpat volutpat. Morbi non porttitor libero. In id tincidunt nunc. Donec convallis placerat nisi sed sagittis. Nunc nunc lorem, finibus in nibh et, scelerisque cursus turpis.
                                <br><br>
                                Nam ac pretium velit. Donec eros sem, ullamcorper nec ante et, dignissim efficitur mauris. Etiam eget augue venenatis, vestibulum turpis sit amet, porttitor odio. Nam faucibus nulla nisi, et gravida erat tincidunt vel. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu lorem lobortis, condimentum justo vel, volutpat odio. Donec orci eros, aliquet vel sem eget, convallis eleifend turpis. Quisque nec orci vitae erat porttitor cursus. Quisque tincidunt nisi vitae laoreet fermentum.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    </body>
<script src="./js/connexion.js"></script>
</html>
