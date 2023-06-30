@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            Benvenuto {{ Auth::user()->name }}
        </h2>
        <div class="row justify-content-center">

            @if (count($restaurant) === 0)
                <div class="col">
                    <a href="{{ route('admin.restaurants.create') }}" class="btn btn-primary">Crea un ristorante</a>
                </div>
            @else
                @foreach ($restaurant as $item)
                    <div class="card">

                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top w-50" alt="Restaurant Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">Indirizzo: {{ $item->address }}</p>
                            <p class="card-text">P.IVA: {{ $item->vat_number }}</p>
                            @if ($item->description)
                                <p class="card-text">Descrizione: {{ $item->description }}</p>
                            @else
                                <p>Descrizione non disponibile</p>
                            @endif
                            <a href="#" class="btn btn-primary">Visualizza prodotti</a>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection
