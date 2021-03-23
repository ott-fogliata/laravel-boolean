@extends('template.base')

@section('title', 'Show')

@section('content')

    <div class="card" style="width: 14rem;">
        <img class="card-img-top" src="{{ $auto->pic }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $auto->model_name }}</h5>
            <p class="card-text">{{ $auto->cubic_capacity }}</p>
        </div>
    </div>

@endsection
