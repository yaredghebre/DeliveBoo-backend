@extends('layouts.app')

@section('content')



    <div class="containter vh-100">
        @if ($errors->any())
            <ul class="alert alert-danger w-50 m-auto mt-4 list-unstyled">
                <h4 class="text-center" >Attenzione</h4>
                <li class="text-center" >Controlla gli errori nei campi</li>
            </ul>    
        @endif
        <div class="row h-100 justify-content-center py-4">
            <div class="col-6">
                <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="restaurant_name" class="form-label">Nome Attività</label>
                        <input type="text" class="form-control @error('name')is-invalid @enderror" id="restaurant_name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
                        <label for="restaurant_address" class="form-label">Indirizzo Attività</label>
                        <input type="text" class="form-control @error('address')is-invalid @enderror" id="restaurant_address" name="address" value="{{ old('address') }}">
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="restaurant_vat_number" class="form-label">P.IVA</label>
                        <input type="text" class="form-control @error('vat_number')is-invalid @enderror" id="restaurant_vat_number" name="vat_number" value="{{ old('vat_number') }}">
                        @error('vat_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="restaurant_img">
                            Seleziona un immagine di copertina per la tua
                            attività
                        </label>
                        <input type="file" class="form-control  @error('image')is-invalid @enderror" id="restaurant_img" name="image" value="{{ old('image') }}">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <p>Aggiungi una descrizione della tua attività</p>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Descrizione Attività" id="restaurant_description" style="height: 160px"
                                name="description">{{ old('description') }}</textarea>
                            <label for="restaurant_description">Descrizione</label>
                        </div>

                    </div>

                    <p>seleziona le categorie che più si addicono alla tua attività</p>
                    <div class="mb-3 types-checkbox form-tags-container row ">
                        
                        @foreach ($types as $type)
                        <div class="form-check form-ceck-tag ">
                           
                            <input class="form-check-input ms_form-check @error('type_id')is-invalid @enderror  " type="checkbox" value="{{$type->id}}" id="type-{{$type->id}}" name="types[]">
                            <label class="form-check-label absolute " for="type-{{$type->id}}">
                                {{$type->name}}
                            </label>
                            
                        </div>
                        @endforeach
                        @error('type_id')   
                            <p class="checkbox-error ">seleziona almeno una categoria</p>   
                        @enderror
                        
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>

                </form>
            </div>
        </div>
    @endsection
