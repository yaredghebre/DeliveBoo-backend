@extends('layouts.app')

@section('content')



    <div class="containter vh-100">
        <div class="row h-100 justify-content-center align-items-center">
            @if ($errors->any())
                <ul class="allert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="col-6">
                <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="restaurant_name" class="form-label">Nome Attività</label>
                        <input type="text" class="form-control" id="restaurant_name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="restaurant_address" class="form-label">Indirizzo Attività</label>
                        <input type="text" class="form-control" id="restaurant_address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="restaurant_vat_number" class="form-label">Numero P.IVA</label>
                        <input type="text" class="form-control" id="restaurant_vat_number" name="vat_number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="restaurant_img">
                            Seleziona un immagine di copertina per la tua
                            attività
                        </label>
                        <input type="file" class="form-control" id="restaurant_img" name="image">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Descrizione Attività" id="restaurant_description" style="height: 160px"
                                name="description"></textarea>
                            <label for="restaurant_description">Descrizione</label>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success ms-auto">Salva</button>

                </form>
            </div>
        </div>
    @endsection
