@extends('layouts.app')

@section('content')
    <section class="login">

        <div class="container mt-4 ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card ms_card">
                        <div class="card-header text-center">Login</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-4 row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"><i
                                            class="fa-regular fa-envelope"></i><span class="ms-1"> E-mail</span></label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <h6>{{ $message }}</h6>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"><i
                                            class="fa-solid fa-lock"></i><span class="ms-1"> Password</span></label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <h6>{{ $message }}</h6>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                Ricorda dati di accesso
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 row mb-0">
                                    <div class="col-md-10 offset-md-4">
                                        <button type="submit" class="btn btn-warning" id="login">
                                            Accedi
                                        </button>


                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Recupera Password
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-4 row mb-0">
                                    <div class="col-md-12 text-center">
                                        <span>Non sei ancora registrato?</span>
                                        <a href="{{ route('register') }}" class="btn btn-link">
                                            Registrati
                                        </a>
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
    @vite(['resources/js/helpers/loginFormValidation.js'])
@endsection
