@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(isset($success))
    <div class="text-success alert-success border rounded-pill p-3 text-center">
        {{ $success }}
    </div>
@elseif(session()->has('success'))
    <div class="text-success alert-success border rounded-pill p-3 text-center">
        {{ session('success') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="text-danger alert-danger border rounded-pill p-3 text-center">
        {{ session('error') }}
    </div>
@endif
