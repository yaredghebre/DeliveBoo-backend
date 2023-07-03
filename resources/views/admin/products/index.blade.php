@extends('layouts.app')

@section('content')
    {{-- @dd($products) --}}

    <div class="container-fluid w-75 mt-5">
        <h1 class="my-3">I prodotti di {{ Auth::user()->restaurant->name }}</h1>
        <div class="row row-cols-6 gap-2">
    
            @foreach ($products as $item)
                <div class="card">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top w-25" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        @if ($item->description)
                            <p class="card-text">{{ $item->description }}</p>
                        @else
                            <p>Nessuna descrizione</p>
                        @endif
                        <p class="card-text">€ {{ $item->price }}</p>
                        <form action="{{route('admin.products.update', $item->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="visible" value="{{ $item->visible? '0': '1'}}">
                            @if($item->visible === 1)
                                <button type="submit" class="btn btn-warning"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></button>
                            @else
                                <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-eye-slash" style="color: #ffffff;"></i></button>    
                            @endif
                        </form>
                        <form action=""></form>
                    </div>
                </div>
            @endforeach

        </div>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mt-3">Torna alla Dashboard</a>
    </div>
@endsection
