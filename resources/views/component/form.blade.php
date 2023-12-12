@extends('layouts.app')

@section('content')
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

                    <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

                    <div class="col-lg-7">
                        <form action="forms/quote.php" method="post" class="php-email-form">
                            <h3>Datos personales</h3>
                            <p>Sus datos estaran protegidos en nuestras bases, por favor proporcionanos nuestros datos para
                                poder ayudarte de la manera mas comoda</p>
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="departure" class="form-control"
                                        placeholder="¿donde estas ubicado?" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="delivery" class="form-control" placeholder="Nombres"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="weight" class="form-control" placeholder="Apellidos"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="dimensions" class="form-control"
                                        placeholder="Numero de contacto" required>
                                </div>

                                <div class="col-lg-12">
                                    <h4>Detalles de tu PC</h4>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" placeholder="Marca" required>
                                </div>

                                <div class="col-md-12 ">
                                    <input type="email" class="form-control" name="email" placeholder="Tiempo de Uso"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="phone" placeholder="Correo/Telefono"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Cuentanos que necesitas (Reparacion/Compra)"
                                        required></textarea>
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
