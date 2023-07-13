@extends('layouts.app')

@section('content')
<img class="background-img" src="{{ asset('img/Background-cover.png') }}" alt="">
    <div class="wrapper">
        <div class="container">
            <h1 class="mb-3 welcome">
               {{-- Benvenuto {{ Auth::user()->name }} --}}
            </h1>
            <div class="row justify-content-center">
                @include('partials.session-message')

                @if (!$restaurant)
                    <div class="no-restaurants">
                        <div class="welcome">
                            <div class="img-container">
                                <img src="{{asset('img/logo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="hero mb-5">
                            <div class="ms_row">
                                <div class="text text-center">
                                    <h4>
                                        Crea il tuo ristorante
                                    </h4>
                                    <p>
                                        Porta il tuo ristorante sul web e mettiti in contatto con migliaia di potenziali clienti.
                                    </p>
                                </div>
                                <div class="img-hero-container">
                                    <img src="{{asset('img/web.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="ms_row central">
                                
                                <div class="img-hero-container">
                                    <img src="{{asset('img/login_bg.jpg')}}" alt="">
                                </div>
                                <div class="text text-center">
                                    <h4>
                                        Inserisci i tuoi prodotti
                                    </h4>
                                    <p>
                                        Crea nuovi prodotti dal nostro gestonale in modo facile e veloce, i tuoi clienti potranno poi ordinarli dal sito
                                    </p>
                                </div>
                            </div>
                            <div class="ms_row ">
                                <div class="text text-center">
                                    <h4>
                                        Consegna
                                    </h4>
                                    <p>
                                        Occupati di ricevere l'ordine e cucinarlo. <br> Al resto ci pensiamo noi grazie ai nostri Riders!
                                    </p>
                                </div>
                                <div class="img-hero-container">
                                    <img src="{{asset('img/Rider.jpeg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1>Inizia Subito!</h1>
                            <a href="{{ route('admin.restaurants.create') }}" class="btn btn-success">Crea un ristorante</a>
                        </div>
                       
                    </div>
                @else
                    <div class="card">
                        <div class="card-img">
                            @if ($restaurant->image)
                                <img src="{{ asset('storage/' . $restaurant->image) }}" class=""
                                    alt="Restaurant Image">
                            @else
                                <img src="{{ asset('img/logo.png') }}" class="" alt="Restaurant Image">
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
