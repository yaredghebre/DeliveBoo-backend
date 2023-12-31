@extends('layouts.app')

@section('content')
<img class="background-img" src="{{ asset('img/Background-cover.png') }}" alt="">
    <div class="wrapper">

        <div class="ms_container">
            @include('partials.session-message')
            @if ($errors->any())
                {{-- <p>attenzione controlla errori</p>   --}}
            @endif


            <form class="mt-4 ms_form edit" action="{{ route('admin.products.update', $product->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Cambia nome al prodotto *</label>
                    <input required minlength="4" maxlength="50"
                        type="text"class="form-control @error('name')is-invalid @enderror" id="name" name="name"
                        value="{{ old('name', $product->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Cambia categoria *</label>
                    <select required class="form-select" aria-label="Default select example" name="category_id"
                        id="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected($category->id === old('category_id', $product->category_id))> {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Modifica il prezzo *</label>
                    <input required type="number" class="form-control @error('price')is-invalid @enderror" id="price"
                        name="price" step="0.01" min="0" value="{{ old('price', $product->price) }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image-input">Modifica immagine</label>
                    <input class="form-control @error('image')is-invalid @enderror" type="file" name="image"
                        id="image-input" value="{{ old('image') }}">
                    <div class="img-preview-container">
                        <img class="d-none" id="image-preview" src="" alt="">
                        @if ($product->image)
                            <img id="current-image" src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}">
                        @endif
                    </div>
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Modifica descrizione del prodotto</label>
                    <textarea minlength="6" maxlength="1000" class="form-control @error('description')is-invalid @enderror"
                        id="description" name="description" value="" rows="3">{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <p class="w-100 text-center">* Questi campi sono obbligatori </p>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-warning" type="submit">Salva modifiche</button>
                </div>

            </form>

            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark mt-3">&larr; Torna ai prodotti</a>

        </div>
    </div>
@endsection
