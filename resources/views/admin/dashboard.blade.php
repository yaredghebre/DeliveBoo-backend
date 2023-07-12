@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <img class="background-img" src="{{ asset('img/Background-cover.png') }}" alt="">
        <div class="container">
            <h1 class="mb-3 welcome">
               {{-- Benvenuto {{ Auth::user()->name }} --}}
            </h1>
            <div class="row justify-content-center">
                @include('partials.session-message')

                @if (!$restaurant)
                    <div class="col ">
                        <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary">Crea un ristorante</a>
                    </div>
                @else
                    <div class="card">
                        <div class="card-img">
                            @if ($restaurant->image)
                                <img src="{{ asset('storage/' . $restaurant->image) }}" class=""
                                    alt="Restaurant Image">
                            @else
                                <img src="{{ asset('img/logo.png') }}"" class="" alt="Restaurant Image">
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="restaurant-detail-card-container">
                                <div class="restaurant-detail-card ">
                                    <h2 class="d-inline-block me-2">{{ $restaurant->name }}</h2>
                                    <!-- Altrimenti, puoi mostrare un messaggio di caricamento o una stringa predefinita -->
                                    <p><i class="fa-solid fa-location-dot"></i> {{ $restaurant->address }}</p>
                                </div>
                            </div>

                            <div class="">
                                <h2>Dettagli Ristorante</h2>
                                <h5 class="card-text d-inline-block">P. IVA:</h5>
                                <span>{{ $restaurant->vat_number }}</span>
                                <hr>
                                @if ($restaurant->description)
                                    <h5 class="card-text d-inline-block">Descrizione: </h5>
                                    <p>{{ $restaurant->description }}</p>
                                    <hr>
                                @else
                                    <h5 class="card-text d-inline-block">Descrizione: </h5>
                                    <p>Descrizione non disponibile</p>
                                    <hr>
                                @endif
                            </div>

                            <div class="restaurant-actions  d-flex justify-content-start">
                                @if ($restaurant->products->isEmpty())
                                    <a href="{{ route('admin.products.create') }}" class="btn btn-success me-1">Aggiungi
                                        prodotti</a>
                                @else
                                    <a href="{{ route('admin.products.index') }}"
                                        class="btn ms_button-yellow me-1">Visualizza
                                        prodotti</a>
                                    <a href="{{ route('admin.products.create') }}" class="btn ms_button-green me-1">Aggiungi
                                        prodotti +</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
