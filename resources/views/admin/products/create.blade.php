@extends('layouts.app')
@section('content')
    <div class="container w-50">
        {{-- i campi non sono validati ancora --}}

        <form class="mt-4" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">nome prodotto</label>
                <input type="text" class="form-control" id="name" name="name" value="">
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleziona una categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="price" class="form-label">inserisci il prezzo</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" min="0"
                    value="">
            </div>
            <div class="mb-3">
                <label for="image">inserisci img</label>
                <input class="form-control" type="file"name="image" id="image">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">inserisci descrizione del prodotto</label>
                <textarea class="form-control" id="description" name="description" value="" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">salva prodotto</button>

        </form>
    </div>
@endsection
