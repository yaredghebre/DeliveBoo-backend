@extends('layouts.app')

@section('content')
    {{-- @dd($products) --}}

    <div class="container-fluid w-75 mt-5">
        <h1 class="my-3">I prodotti di {{ Auth::user()->restaurant->name }}</h1>
        <div class="row row-cols-6 gap-2">
    
            @foreach ($products as $item)
                <div class="card">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top w-25" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        @if ($item->description)
                            <p class="card-text">{{ $item->description }}</p>
                        @else
                            <p>Nessuna descrizione</p>
                        @endif
                        <p class="card-text">€ {{ $item->price }}</p>
                    </div>
                </div>
            @endforeach

        </div>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mt-3">Torna alla Dashboard</a>
    </div>
@endsection
