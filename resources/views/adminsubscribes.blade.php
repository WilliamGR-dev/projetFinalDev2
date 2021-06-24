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
                <h1 class="text-white">Subscribes</h1>
                @include('navbarprofile')
                <hr>
                <table class="w-90 table table-striped table-light table-hover" style="margin-top: 50px">
                    <thead>
                    <tr>
                        <td>User</td>
                        <td>Status</td>
                        <td>Prix</td>
                        <td>Creer le</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allSubscribes as $subscribe)
                        <tr>
                            <td>{{ $allUsers[$subscribe->user_id]->name }}</td>
                            <td>{{ $subscribe->stripe_status }}</td>
                            <td>@if($subscribe->stripe_price == 'price_1J2H2ZGsegk9YRQooblJfbxa') 9,99€ @else 4,99€ @endif</td>
                            <td>{{ $subscribe->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @include('navmenu')
    @include('player')
</section>
</body>
</html>
