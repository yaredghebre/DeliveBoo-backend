@extends('layouts.app')

@section('content')
    @include('partials.session-message');
    @include('partials.modal-delete');

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            {{$item}}
        @endforeach
    @endif


    <div class="container-fluid w-75 mt-5">
        <h1 class="my-3">I prodotti di "{{ Auth::user()->restaurant->name }}" </h1>
        <div class="row row-cols-6 gap-2">

            @foreach ($products as $item)
                <div class="card">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top w-25" alt="{{ $item->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>

                        @if ($item->category)
                            <p class="card-text">{{ $item->category->name }}</p>
                        @else
                            <p>Nessuna categoria</p>
                        @endif

                        @if ($item->description)
                            <p class="card-text">{{ $item->description }}</p>
                        @else
                            <p>Nessuna descrizione</p>
                        @endif
                        <p class="card-text">€ {{ $item->price }}</p>

                        <form action="{{ route('admin.product.visible', $item->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <input type="hidden" name="visible" value="{{ $item->visible ? '0' : '1' }}">
                            @if ($item->visible === 1)
                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"
                                        style="color: #ffffff;"></i></button>
                            @else
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-x"
                                        style="color: #ffffff;"></i></button>
                            @endif
                        </form>

                        <form action="{{ route('admin.products.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-delete" data-product-name="{{ $item->name }}"> 
                                <i class="fa-solid fa-trash" tyle="color: #ffffff;"></i>
                            </button>
                        </form>

                        <a href="{{ route('admin.products.edit', $item->id) }}" class="btn btn-secondary">
                            <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                        </a>

                        <a href="{{ route('admin.products.show', $item->id) }}" class="btn btn-info">
                            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
                        </a>

                    </div>
                </div>
            @endforeach

        </div>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mt-3">Torna alla Dashboard</a>
        <a href="{{ route('admin.products.create') }}" class="btn btn-warning mt-3">Aggiungi un prodotto +</a>

    </div>
@endsection
