@extends('layouts.app')

@section('content')

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/users.jpg');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Login</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Login</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Get a Quote Section ======= -->
        <section id="get-a-quote" class="get-a-quote">
            <div class="container" data-aos="fade-up">

                <div class="row g-0">

                    <div class="col-lg-6">
                        <form method="POST" action="{{ route('register') }}" class="php-email-form">
                            @csrf
                            <h3>Formulario De Registro</h3>
                            <p>Garantizamos la privacidad de sus datos. Por favor ingrese sus datos para que pueda acceder a
                                nuestros servicios comodamente</p>
                            <div class="row gy-4 mt-1">
                                <div class="col-md-12">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Ingrese su nombre completo">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Ingrese su correo electronico">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Ingrese una contraseña segura">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirme su contraseña">
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit">Enviar</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Quote Form -->

                    <div class="col-lg-6 p-5">
                        <form method="POST" action="{{ route('login') }}" class="php-email-form">
                            @csrf
                            <h3>Login</h3>
                            <p>Ingrese a la plataforma con sus credenciales</p>
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Ingrese su correo electronico">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Ingrese su contraseña">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your quote request has been sent successfully. Thank you!
                                    </div>
                                    <button type="submit" onclick="update()">Enviar</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
