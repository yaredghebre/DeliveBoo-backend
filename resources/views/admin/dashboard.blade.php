@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            Benvenuto {{ Auth::user()->name }}
        </h2>
        <div class="row justify-content-center">
            @include('partials.session-message')

            @if (!$restaurant)
                <div class="col">
                    <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary">Crea un ristorante</a>
                </div>
            @else
                <div class="card">

                    <img src="{{ asset('storage/' . $restaurant->image) }}" class="card-img-top w-50" alt="Restaurant Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $restaurant->name }}</h5>
                        <p class="card-text">Indirizzo: {{ $restaurant->address }}</p>
                        <p class="card-text">P.IVA: {{ $restaurant->vat_number }}</p>
                        @if ($restaurant->description)
                            <p class="card-text">Descrizione: {{ $restaurant->description }}</p>
                        @else
                            <p>Descrizione non disponibile</p>
                        @endif
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Visualizza
                            prodotti</a>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
