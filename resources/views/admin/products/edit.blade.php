@extends('layouts.app')

@section('content')
    <div class="container w-50">
        @include('partials.session-message')
        @if ($errors->any())
            {{-- <p>attenzione controlla errori</p>   --}}
        @endif


        <form class="mt-4" action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome prodotto</label>
                <input type="text"class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{old('name', $product->name)}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
           
            <div class="mb-3">
                <label for="category" class="form-label">Cambia categoria</label>
                <select class="form-select" aria-label="Default select example" name="category_id" id="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected($category->id === old('category_id', $product->category_id))> {{ $category->name }} </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Modifica il prezzo</label>
                <input type="number" class="form-control @error('price')is-invalid @enderror" id="price" name="price" step="0.01" min="1"
                    value="{{old('price', $product->price)}}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image">Modifica immagine</label>
                <input class="form-control @error('image')is-invalid @enderror" type="file" name="image" id="image" value="{{old('image')}}">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Modifica descrizione del prodotto</label>
                <textarea class="form-control @error('description')is-invalid @enderror" id="description" name="description" value="" rows="3">{{old('description', $product->description)}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <button class="btn btn-primary" type="submit">Salva prodotto modificato</button>

        </form>

        <a href="{{ route('admin.products.index') }}" class="btn btn-warning mt-3">Torna ai prodotti</a>

    </div>
@endsection
