@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/users.jpg');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>User and Login</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>User/Login</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Get a Quote Section ======= -->
        <section id="get-a-quote" class="get-a-quote">
            <div class="container" data-aos="fade-up">

                <div class="row g-0">

                    <div class="col-lg-6">
                        <form action="forms/quote.php" method="post" class="php-email-form">
                            <h3>Datos personales</h3>
                            <p>Sus datos estaran protegidos en nuestras bases, por favor proporcionanos nuestros datos para
                                poder ayudarte de la manera mas comoda</p>
                            <div class="row gy-4 mt-1">
                                <div class="col-md-12">
                                    <input type="text" name="departure" class="form-control"
                                        placeholder="¿donde estas ubicado?" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="delivery" class="form-control" placeholder="Nombres"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="weight" class="form-control" placeholder="Apellidos"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="dimensions" class="form-control"
                                        placeholder="Numero de contacto" required>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your quote request has been sent successfully. Thank you!
                                    </div>

                                    <button type="submit">Enviar</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Quote Form -->

                    <div class="col-lg-6 p-5">
                        <form action="forms/quote.php" method="post" class="php-email-form">
                            <h3>Datos personales</h3>
                            <p>Sus datos estaran protegidos en nuestras bases, por favor proporcionanos nuestros datos para
                                poder ayudarte de la manera mas comoda</p>
                            <div class="row gy-4">

                                <div class="col-md-12">
                                    <input type="text" name="departure" class="form-control"   placeholder="¿donde estas ubicado?" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="delivery" class="form-control" placeholder="Nombres"  required>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your quote request has been sent successfully. Thank you!
                                    </div>

                                    <button type="submit">Enviar</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Quote Form -->

                </div>

            </div>
        </section><!-- End Get a Quote Section -->

    </main><!-- End #main -->

@endsection
