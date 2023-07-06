@extends('layouts.app')
@section('content')
    <div class="container w-50">
        @include('partials.session-message')

        <form class="mt-4" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome prodotto *</label>
                <input required maxlength="50" minlength="4"
                    type="text"class="form-control @error('name')is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Inserisci la categoria *</label>
                <select required class="form-select @error('category_id')is-invalid @enderror"
                    aria-label="Default select example" name="category_id" id="category">
                    <option value="" selected>Seleziona una categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                    @endforeach
                </select>

                @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Inserisci il prezzo *</label>
                <input required type="number" class="form-control @error('price')is-invalid @enderror" id="price"
                    name="price" step="0.01" min="0" value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image-input">Inserisci immagine</label>
                <input required class="form-control @error('image')is-invalid @enderror" type="file" name="image"
                    id="image-input" value="{{ old('file') }}">
                <div>
                    <img class="d-none w-25" id="image-preview" src="" alt="">
                </div>
                @error('file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Inserisci descrizione del prodotto</label>
                <textarea minlength="6" maxlength="1000" class="form-control @error('description')is-invalid @enderror"
                    id="description" name="description" value="" rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <p class="w-100 text-center">* Questi campi sono obbligatori </p>

            <button class="btn btn-success mt-3" type="submit">Salva prodotto</button>

            <a href="{{ route('admin.products.index') }}" class="btn btn-primary mt-3">Torna ai prodotti</a>


        </form>
    </div>
@endsection
