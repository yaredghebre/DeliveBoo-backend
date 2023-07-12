@extends('layouts.app')

@section('content')
    @include('partials.session-message')
    @include('partials.modal-delete')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            {{ $item }}
        @endforeach
    @endif

    <div class="ms_wrapper">

        <div class="container mt-5 pb-5 ms_index-products">
            {{-- <h1 class="my-3">I miei prodotti</h1> --}}
            {{-- <h1 class="my-3">I prodotti di {{ Auth::user()->restaurant->name }} </h1> --}}
            <div class="row">
                @foreach ($products as $item)
                    <div class="ms_col">
                        <div class="ms_card">

                            <div class="ms_card-top">
                                <a href="{{ route('admin.products.show', $item->id) }}"
                                    class="ms_card-img-box {{ $item->visible ? '' : 'sepia' }}"
                                    data-visible="{{ $item->visible ? '1' : '0' }}"
                                    data-image="{{ asset('storage/' . $item->image) }}">

                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="DeliveBoo">
                                    @else
                                        <img src="{{ asset('img/logo.png') }}" alt="Deliveboo">
                                    @endif
                                </a>
                            </div>

                            <div class="ms_card-body">
                                <h3 class="card-title text-center">{{ $item->name }}</h3>

                                <div class="ms_card-details d-flex gap-2">

                                    @if ($item->category)
                                        <p class="card-text">{{ $item->category->name }}</p>
                                    @else
                                        <p>Nessuna categoria</p>
                                    @endif

                                    <p class="card-text">€{{ $item->price }}</p>
                                </div>

                                @if ($item->description)
                                    <p class="card-text">
                                        @if (strlen($item->description) > 45)
                                            {{ substr($item->description, 0, 45) }}...
                                        @else
                                            {{ $item->description }}
                                        @endif
                                    </p>
                                @else
                                    <p>Nessuna descrizione</p>
                                @endif

                                <div class="d-flex justify-content-center gap-2">
                                    <form action="{{ route('admin.product.visible', $item->id) }}" method="POST"
                                        class="disp-visible">
                                        @csrf
                                        @method('GET')
                                        <input type="hidden" name="visible" value="{{ $item->visible ? '0' : '1' }}">
                                        @if ($item->visible === 1)
                                            <button type="submit" class="btn btn-secondary btn-hide">
                                                <i class="fa-solid fa-eye-slash" style="color: #ffffff;"></i>
                                                <div class="hide">Nascondi</div>
                                            </button>
                                        @else
                                            <button type="submit" class="btn btn-success btn-show">
                                                <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
                                                <div class="show">Mostra</div>
                                            </button>
                                        @endif
                                    </form>

                                    <a href="{{ route('admin.products.edit', $item->id) }}" class="btn btn-primary">
                                        <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                    </a>

                                    <form action="{{ route('admin.products.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-delete"
                                            data-product-name="{{ $item->name }}">
                                            <i class="fa-solid fa-trash" tyle="color: #ffffff;"></i>
                                        </button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mt-3">Torna alla Dashboard</a>
                <a href="{{ route('admin.products.create') }}" class="btn btn-warning ms_button-yellow mt-3">Aggiungi un prodotto +</a>
            </div>

        </div>
    </div>
@endsection
