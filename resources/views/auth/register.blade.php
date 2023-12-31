@extends('layouts.app')

@section('content')
    <section class="register">

        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card ms_card">
                        <div class="card-header">Registrati</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="mb-4 row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome *</label>

                                    <div class="col-md-6">
                                        <input required id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <h6>{{ $message }}</h6>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Indirizzo Email
                                        *</label>

                                    <div class="col-md-6">
                                        <input required id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <h6>{{ $message }}</h6>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password *</label>

                                    <div class="col-md-6">
                                        <input minlength="8" required id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <h6>{{ $message }}</h6>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Conferma
                                        Password *</label>

                                    <div class="col-md-6">
                                        <input minlength="8" required id="password-confirm" type="password"
                                            class="form-control" name="password_confirmation" required
                                            autocomplete="new-password">

                                        <span class="invalid-feedback" role="alert">
                                            <h6>Le due password devono combaciare</h6>
                                        </span>
                                    </div>


                                </div>

                                <p class="w-100 text-center">* Questi campi sono obbligatori </p>

                                <div class="mb-4 row mb-0 text-center">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning" id="btn-register">
                                            {{ __('Registrati') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    @vite(['resources/js/helpers/RegisterFormValidation.js'])
@endsection
