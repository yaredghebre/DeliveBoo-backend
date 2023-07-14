@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <img class="background-img" src="{{ asset('img/Background-cover.png') }}" alt="">
        <div class="container ">
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
                    <hr>
                    <div class="ms_show-card-details">
                        <div class="d-flex ">
                            @if ($product->category)
                            <div class="w-50">
                                <h4 class="card-text d-inline">Categoria: </h4>
                                <span> {{ $product->category->name }}</span>
                            </div>
                                
                            @else
                            <div class="w-50">
                                <h4 class="card-text d-inline">categoria: </h4>
                                <span> Nessuna categoria</span>
                            </div> 
                            @endif
                            <div class="w-50 text-end">
                                <h4 class="card-text d-inline ">Visibile:</h4>
                                @if ($product->visible)
                                    <span>Si</span>
                                @else
                                    <span>No</span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        
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