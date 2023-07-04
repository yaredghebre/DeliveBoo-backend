@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $product->name }}</h2>

                {{-- product Image --}}

                <div class="my-3">
                    @if ($product->image)
                        <img width="300" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                        <div class="p-5 bg-secondary text-white w-50 text-center">
                            <span> Image not available </span>
                        </div>
                    @endif
                </div>

                @if ($product->type)
                    <h4 class="card-text">Categoria: </h4>
                    <ul>
                        <li>{{ $category->name }}</li>
                    </ul>
                @else
                    <h4 class="card-text">categoria: </h4>
                    <ul>
                        <li>Nessuna categoria</li>
                    </ul>
                @endif

                <h4 class="card-text">Visibile</h4>
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
        <a href="{{ route('admin.products.index') }}" class="btn btn-primary mt-3">Torna ai prodotti</a>
    </div>
@endsection
