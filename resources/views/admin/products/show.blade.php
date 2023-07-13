@extends('layouts.app')

@section('content')
    <div class="ms_wrapper">
        <div class="container mt-5 px-5">
            <div class="ms_show-card">

                <div class="ms_show-card-top">
                    @if ($product->image)
                        <img width="300" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                        <img width="300" src="{{ asset('img/logo.png') }}" alt="Deliveboo">
                    @endif
                </div>

                <div class="ms_show-card-body">
                    <h1 class="card-title text-center">{{ $product->name }}</h1>
                    <div class="ms_show-card-details">
                        @if ($product->category)
                            <h4 class="card-text">Categoria: </h4>
                            <ul>
                                <li>{{ $product->category->name }}</li>
                            </ul>
                        @else
                            <h4 class="card-text">categoria: </h4>
                            <ul>
                                <li>Nessuna categoria</li>
                            </ul>
                        @endif

                        <h4 class="card-text">Visibile:</h4>
                        @if ($product->visible)
                            <p>Si</p>
                        @else
                            <p>No</p>
                        @endif

                        @if ($product->description)
                            <h4 class="card-text">Descrizione: </h4>
                            <p class="card-text">{{ $product->description }}</p>
                        @else
                            <h4 class="card-text">Descrizione: </h4>
                            <p class="card-text">Nessuna descrizione</p>
                        @endif
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mt-3">Torna ai prodotti</a>
            </div>
        </div>
    </div>
@endsection