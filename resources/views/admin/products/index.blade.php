@extends('layouts.app')

@section('content')
    @include('partials.session-message')
    @include('partials.modal-delete')

    @if ($errors->any())
        @foreach ($errors->all() as $item)
            {{ $item }}
        @endforeach
    @endif


    <div class="container-fluid w-75 mt-5 pb-5 ms_index-products">
        <h1 class="my-3">I prodotti di "{{ Auth::user()->restaurant->name }}" </h1>
        <div class="row row-cols-5 row-cols-sm-1 row-cols-md-3 row-cols-lg-5">
            @foreach ($products as $item)
                <div class="col col-5">
                    <div class="card">

                        <div class="card-top">
                            <a href="{{ route('admin.products.show', $item->id) }}"
                                class="ms_card-img-box {{ $item->visible ? 'sepia' : '' }}"
                                data-visible="{{ $item->visible ? '1' : '0' }}"
                                data-image="{{ asset('storage/' . $item->image) }}">
    
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="DeliveBoo">
                                @else
                                    <img src="{{ asset('img/logo.png') }}" alt="Deliveboo">
                                @endif
                            </a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>

                            @if ($item->category)
                                <p class="card-text">{{ $item->category->name }}</p>
                            @else
                                <p>Nessuna categoria</p>
                            @endif

                            @if ($item->description)
                                <p class="card-text">{{ $item->description }}</p>
                            @else
                                <p>Nessuna descrizione</p>
                            @endif
                            <p class="card-text">€ {{ $item->price }}</p>

                            <div class="d-flex justify-content-center gap-2">
                                <form action="{{ route('admin.product.visible', $item->id) }}" method="POST"
                                    class="disp-visible">
                                    @csrf
                                    @method('GET')
                                    <input type="hidden" name="visible" value="{{ $item->visible ? '0' : '1' }}">
                                    @if ($item->visible === 1)
                                        <button type="submit" class="btn btn-secondary btn-show">
                                            <i class="fa-solid fa-eye-slash" style="color: #ffffff;"></i>
                                            <div class="show">Mostra</div>
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-success btn-hide">
                                            <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
                                            <div class="hide">Nascondi</div>
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


                                {{-- <a href="{{ route('admin.products.show', $item->id) }}" class="btn btn-info">
                                    <i class="fa-solid fa-eye" style="color: #ffffff;"></i>
                                </a> --}}

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary mt-3">Torna alla Dashboard</a>
        <a href="{{ route('admin.products.create') }}" class="btn btn-warning mt-3">Aggiungi un prodotto +</a>

    </div>
@endsection
