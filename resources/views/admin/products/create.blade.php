@extends('layouts.app')
@section('content')
<div class="mb-3">
    <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name" class="form-label">nome prodotto</label>
        <input type="text" class="form-control" id="name" name="name" value="">
      </div>
      {{-- serve select per categoria i campi non sono validati ancora --}}
      <label for="price" class="form-label">inserisci il prezzo</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" value="">
      </div>
      <label for="image">inserisci img</label>
      <input type="file"name="image" id="image">
      
      <div class="mb-3">
        <label for="description" class="form-label">inserisci descrizione del prodotto</label>
        <textarea class="form-control" id="description" name="description" value="" rows="3"></textarea>
      </div>
      <button type="submit">salva prodotto</button>
     
    </form>
  
@endsection