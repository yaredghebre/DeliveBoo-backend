@extends('layouts.app')

@section('content')
    @include('partials.session-message')

    <img class="background-img" src="{{ asset('img/Background-cover.png') }}" alt="">
    <div class="container-fluid  py-4  restaurants ">
            
        @if ($errors->any())
            <ul class="alert alert-danger w-50 m-auto mt-4 list-unstyled">
                <h4 class="text-center">Attenzione</h4>
                <li class="text-center">Controlla gli errori nei campi</li>
            </ul>
        @endif

        <div class="container" style="overflow: auto">
            <div class="welcome">
                <div class="img-container">
                    <img src="{{asset('img/logo.png')}}" alt="">
                </div>
            </div>
            <div class="background">
                <img src="{{asset('img/background2.jpg')}}" alt="">
                <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2 class="text-center">Crea il tuo ristorante</h2>
                    <div class="mb-3">
                        <label for="restaurant_name" class="form-label">Nome Attività *</label>
                        <input type="text" minlength="4" maxlength="50" required
                            class="form-control @error('name')is-invalid @enderror" id="restaurant_name" name="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
    
                    </div>
    
                    <div class="mb-3">
                        <label for="restaurant_address" class="form-label">Indirizzo Attività *</label>
                        <input type="text" minlength="5" maxlength="60"required
                            class="form-control @error('address')is-invalid @enderror" id="restaurant_address"
                            name="address" value="{{ old('address') }}">
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="restaurant_vat_number" class="form-label">P.IVA *</label>
                        <input id="iva" type="text" minlength="11" maxlength="11" required
                            class="form-control @error('vat_number')is-invalid @enderror" id="restaurant_vat_number"
                            name="vat_number" value="{{ old('vat_number') }}">
                        @error('vat_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label" for="image-input">
                            Seleziona un immagine di copertina per la tua
                            attività
                        </label>
                        <input type="file" class="form-control   @error('image')is-invalid @enderror" id="image-input"
                            name="image" value="{{ old('file') }}">
                        <div class="img-preview-container">
                            <img class="d-none " id="image-preview" src="" alt="">
                        </div>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <p>Aggiungi una descrizione della tua attività</p>
                        <div class="form-floating">
                            <textarea minlength="6" maxlength="1000" class="form-control @error('description')is-invalid @enderror"
                                placeholder="Descrizione Attività" id="restaurant_description" style="height: 160px" name="description">{{ old('description') }}</textarea>
                            <label for="restaurant_description">Descrizione</label>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
    
                        </div>
    
                    </div>
    
                    <p class="text-center">seleziona le categorie che più si addicono alla tua attività *</p>
                    <div class="mb-3 types-checkbox form-tags-container row">
                        <span id="category-error" class="fs-6 d-none text-center mt-3 mb-3 text-danger">
                            Seleziona una categoria
                        </span>
    
                        @foreach ($types as $type)
                            <div class="form-check form-ceck-tag ">
                                <input
                                    class="form-check-input ms_form-check @error('types')is-invalid @enderror  checkTypes"
                                    type="checkbox" value="{{ $type->id }}" id="type-{{ $type->id }}"
                                    name="types[]" @checked(in_array($type->id, old('types', [])))>
                                <label class="form-check-label absolute " for="type-{{ $type->id }}">
                                    {{ $type->name }}
                                </label>
    
                            </div>
                        @endforeach
    
                        @error('types')
                            <p class="checkbox-error ">seleziona almeno una categoria</p>
                        @enderror
    
                    </div>
    
                    <div class="text-center">
                        <button id="restaurant-form" type="submit" class="btn btn-success">Crea Ristorante</button>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @vite(['resources/js/helpers/checkedBoxValidation.js'])
@endsection
