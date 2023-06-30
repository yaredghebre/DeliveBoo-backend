@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary">Crea un ristorante</a>
            </div>
        </div>
    </div>
@endsection
