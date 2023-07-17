@extends('layouts.app')

@section('content')
    @include('partials.session-message')
    @include('partials.modal-delete')
    <img class="background-img" src="{{ asset('img/Background-cover.png') }}" alt="">
    @if (!$restaurant)
        <div class="wrapper">
            <div class="container new-user ">

                <div class="row h-100 justify-content-center">
                    @include('partials.session-message')
                    {{-- VISUALIZATION WITHOUT A RESTAURANT (FIRST ACCESS) ---------------------------------------------------------------------------------------------- --}}
                    <div class="no-restaurants">
                        <div class="welcome">
                            <div class="img-container">
                                <img src="{{ asset('img/logo.png') }}" alt="">
                            </div>
                        </div>
                        <div class="hero mb-5">
                            <div class="ms_row">
                                <div class="text text-center">
                                    <h4>
                                        Crea il tuo ristorante
                                    </h4>
                                    <p>
                                        Porta il tuo ristorante sul web e mettiti in contatto con migliaia di potenziali
                                        clienti.
                                    </p>
                                </div>
                                <div class="img-hero-container">
                                    <img src="{{ asset('img/web.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="ms_row central">

                                <div class="img-hero-container">
                                    <img src="{{ asset('img/login_bg.jpg') }}" alt="">
                                </div>
                                <div class="text text-center">
                                    <h4>
                                        Inserisci i tuoi prodotti
                                    </h4>
                                    <p>
                                        Crea nuovi prodotti dal nostro gestonale in modo facile e veloce, i tuoi clienti
                                        potranno poi ordinarli dal sito
                                    </p>
                                </div>
                            </div>
                            <div class="ms_row ">
                                <div class="text text-center">
                                    <h4>
                                        Consegna
                                    </h4>
                                    <p>
                                        Occupati di ricevere l'ordine e cucinarlo. <br> Al resto ci pensiamo noi grazie ai
                                        nostri Riders!
                                    </p>
                                </div>
                                <div class="img-hero-container">
                                    <img src="{{ asset('img/Rider.jpeg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1>Inizia Subito!</h1>
                            <a href="{{ route('admin.restaurants.create') }}" class="btn btn-success">Crea un ristorante</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="wrapper">
            <div class="container restaurant">
                {{-- ------------------ VISUALIZATION WITH A RESTAURANT---------------------------------------------------------------------------------------------- --}}
                <div class="card">
                    <div class="card-img">
                        @if ($restaurant->image)
                            <img src="{{ asset('storage/' . $restaurant->image) }}" class="" alt="Restaurant Image">
                        @else
                            <img src="{{ asset('img/logo.png') }}" class="" alt="Restaurant Image">
                        @endif
                    </div>

                    <div class="card-body">
                        <div class="restaurant-detail-card-container">
                            <div class="restaurant-detail-card ">
                                <h2 class="d-inline-block me-2">{{ $restaurant->name }}</h2>
                                <!-- Altrimenti, puoi mostrare un messaggio di caricamento o una stringa predefinita -->

                            </div>
                        </div>

                        <div class="">
                            <h2 class="text-center mb-3">Dettagli Ristorante</h2>
                            <h5 class="card-text d-inline-block">Via/Piazza:</h5>
                            <span> {{ $restaurant->address }}</span>
                            <hr>
                            <h5 class="card-text d-inline-block">P. IVA:</h5>
                            <span>{{ $restaurant->vat_number }}</span>
                            <hr>
                            @if ($restaurant->description)
                                <h5 class="card-text d-inline-block">Descrizione: </h5>
                                <p>{{ $restaurant->description }}</p>
                                <hr>
                            @else
                                <h5 class="card-text d-inline-block">Descrizione: </h5>
                                <p>Descrizione non disponibile</p>
                                <hr>
                            @endif
                        </div>



                        <section class="products">
                            <h5 class="text-center">Prodotti</h5>
                            <div class="restaurant-actions  ">
                                <div class="actions">
                                    <a href="{{ route('admin.products.create') }}" class="btn ms_button-green">Aggiungi
                                        Prodotto</a>
                                </div>
                                <div class="products-showcase">
                                    <div class="container">
                                        <div class="row gy-3">
                                            {{-- foreach for products cards --}}
                                            @foreach ($products as $item)
                                                <div class="ms_col">
                                                    <a class="card-link"
                                                        href="{{ route('admin.products.show', $item->id) }}"></a>
                                                    @if ($item->visible === 0)
                                                        <div class="overlay">
                                                            <i class="fa-solid fa-eye-slash" style="color: #ffffff;"></i>
                                                            <p>Prodotto nascosto</p>
                                                        </div>
                                                    @endif

                                                    <div class="ms_card-top">


                                                        @if ($item->image)
                                                            <img src="{{ asset('storage/' . $item->image) }}"
                                                                alt="DeliveBoo">
                                                        @else
                                                            <img src="{{ asset('img/logo.png') }}" alt="Deliveboo">
                                                        @endif

                                                    </div>

                                                    <div class="ms_card-body">
                                                        <div class="card-info">

                                                            <div class="product-card-title">
                                                                <h5 class="card-title text-center">{{ $item->name }}</h5>
                                                            </div>

                                                            <div class="ms_card-details d-flex justify-content-between ">

                                                                @if ($item->category)
                                                                    <p class="card-text">categoria:
                                                                        {{ $item->category->name }}
                                                                    </p>
                                                                @else
                                                                    <p>Nessuna categoria</p>
                                                                @endif

                                                                <p class="card-text">prezzo: €{{ $item->price }}</p>
                                                            </div>

                                                            <div class="description">
                                                                @if ($item->description)
                                                                    <h6>descrizione</h6>
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
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <form action="{{ route('admin.product.visible', $item->id) }}"
                                                                method="POST" class="disp-visible button">
                                                                @csrf
                                                                @method('GET')
                                                                <input type="hidden" name="visible"
                                                                    value="{{ $item->visible ? '0' : '1' }}">
                                                                @if ($item->visible === 1)
                                                                    <button type="submit"
                                                                        class="btn btn-secondary btn-hide">
                                                                        <i class="fa-solid fa-eye-slash"
                                                                            style="color: #ffffff;"></i>
                                                                        <div class="hide">Nascondi</div>
                                                                    </button>
                                                                @else
                                                                    <button type="submit" class="btn btn-success btn-show">
                                                                        <i class="fa-solid fa-eye"
                                                                            style="color: #ffffff;"></i>
                                                                        <div>Mostra</div>
                                                                    </button>
                                                                @endif
                                                            </form>
                                                            <div class="button">
                                                                <a href="{{ route('admin.products.edit', $item->id) }}"
                                                                    class="btn btn-primary">
                                                                    <i class="fa-solid fa-pen-to-square"
                                                                        style="color: #ffffff;"></i>
                                                                    <div>Modifica</div>
                                                                </a>
                                                            </div>

                                                            <form
                                                                action="{{ route('admin.products.destroy', $item->id) }}"
                                                                method="POST" class="button">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-delete"
                                                                    data-product-name="{{ $item->name }}">
                                                                    <i class="fa-solid fa-trash"
                                                                        tyle="color: #ffffff;"></i>
                                                                    <div>Elimina</div>
                                                                </button>
                                                            </form>

                                                        </div>

                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @if (count($orders) > 0)
                            <section class="products mt-4">
                                <h5 class="text-center">Ordini</h5>
                                <div class="products-showcase">
                                    <div class="container">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Stato pagamento</th>
                                                    <th scope="col">Nome Cognome cliente</th>
                                                    <th scope="col">Email cliente</th>
                                                    <th scope="col">Data</th>
                                                    <th scope="col">Totale</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $item)
                                                    <tr>
                                                        <th scope="row">{{ $item['id'] }}</th>
                                                        <td>{{ $item['status'] === 1 ? 'Pagato' : 'Non Pagato' }}</td>
                                                        <td>{{ $item['customer_name_surname'] }}</td>
                                                        <td>{{ $item['customer_email'] }}</td>
                                                        <td>{{ date('d-m-Y, h:m', strtotime($item['date_time'])) }}</td>
                                                        <td>{{ $item['total'] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
