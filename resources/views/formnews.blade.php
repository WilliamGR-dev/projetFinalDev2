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
                <h1 class="text-white">Dashboard</h1>
                @include('navbarprofile')
                <hr>
                <h3 class="text-white">News</h3>
                @if(isset($new))
                    <form class="w-90" action="{{ url('addnew') }}" method="post">
                        @csrf
                        <div style="margin-bottom: 20px">
                            <label>Title</label>
                            <input name="title" class="form-control" value="{{ $new->title }}">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" value="{{ $new->date }}">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Texte description</label>
                            <input name="text_description" class="form-control" value="{{ $new->text_description }}">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Full text</label>
                            <input name="full_text" class="form-control" value="{{ $new->full_text }}">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Publish</label>
                            <select name="publish">
                                <option value="1" @if($new->publish==1) selected @endif>Oui</option>
                                <option value="0" @if($new->publish==0) selected @endif>Non</option>
                            </select>
                        </div>
                        <button class="btn btn-light rounded-pill" style="margin-right: 10px">Annuler</button>
                        <button class="btn btn-light rounded-pill" style="margin-left: 10px">Enregistrer</button>
                    </form>
                @else
                    <form class="w-90" action="{{ url('addnew') }}" method="post">
                        @csrf
                        <div style="margin-bottom: 20px">
                            <label>Title</label>
                            <input name="title" class="form-control">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Texte description</label>
                            <input name="text_description" class="form-control">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Full text</label>
                            <input name="full_text" class="form-control">
                        </div>
                        <div style="margin-bottom: 20px">
                            <label>Publish</label>
                            <select name="publish">
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                            </select>
                        </div>
                        <button class="btn btn-light rounded-pill" style="margin-right: 10px">Annuler</button>
                        <button class="btn btn-light rounded-pill" style="margin-left: 10px">Enregistrer</button>
                    </form>
                @endif
            </div>
        </div>
    </section>
    @include('navmenu')
    @include('player')
</section>
</body>
</html>
