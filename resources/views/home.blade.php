@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">BIENVENIDO A EMPREMRED S.A.S</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Bienvenido a EMPREMRED S.A.S, tu aliado confiable en el
                        universo tecnológico. Nos enorgullece ofrecer soluciones integrales que van más allá de la
                        simple reparación de equipos. Descubre cómo nuestras prácticas sostenibles y servicios
                        especializados pueden potenciar tus activos digitales.</p>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="icons/icono de la pagina de home.png" class="img-fluid mb-3 mb-lg-0" alt="1000">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div>
                            <h4 class="title">Mantenimiento</h4>
                            <p class="description">Mantener la salud de tus sistemas es esencial para prevenir problemas
                                futuros. Nuestros expertos en mantenimiento realizan revisiones periódicas,
                                actualizaciones de software y ajustes necesarios para garantizar que tus equipos operen
                                de manera eficiente y segura.</p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Ver mas</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-toolbox"></i></div>
                        <div>
                            <h4 class="title">Reparación</h4>
                            <p class="description">Cuando surgen problemas, nuestro equipo de técnicos altamente
                                capacitados entra en acción. Diagnosticamos y solucionamos rápidamente cualquier
                                inconveniente, desde problemas de hardware hasta desafíos de software. </p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Ver mas</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-user-tie"></i></div>
                        <div>
                            <h4 class="title">Administración</h4>
                            <p class="description">La gestión adecuada de tus sistemas es clave para maximizar su
                                rendimiento. Ofrecemos servicios integrales de administración de equipos y redes,
                                asegurando que tus sistemas operen de manera eficiente, segura y escalable. </p>
                            <a href="service-details.html" class="readmore stretched-link"><span>Ver mas</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->
        <!-- ======= Services Section ======= -->
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Los servicios</span>
                    <h2>Los servicios</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/mantenimiento.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Mantenimiento</a></h3>
                            <p>En EMPREMRED S.A.S, entendemos que la clave para un rendimiento tecnológico óptimo es la
                                atención proactiva. Nuestros servicios de mantenimiento van más allá de las simples
                                revisiones; son una inversión en la salud a largo plazo de tus sistemas.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/reparacion.png" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Reparación</a></h3>
                            <p>Cuando tus sistemas enfrentan desafíos, nuestro equipo altamente capacitado en EMPREMREC
                                S.A.S entra en acción con soluciones de reparación especializadas. Nos dedicamos a
                                restaurar tu tecnología a su máximo potencial, minimizando el tiempo de inactividad y
                                asegurando un funcionamiento sin problemas.</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/administracion.png" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Administración</a></h3>
                            <p>En EMPREMRED S.A.S, no solo nos enfocamos en la corrección de problemas, sino también en
                                la optimización continua de tus sistemas a través de servicios de administración
                                eficiente. </p>
                        </div>
                    </div><!-- End Card Item -->
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="zoom-out">

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3>EMPREMRED S.A.S</h3>
                        <p> EMPREMRED S.A.S, tu socio tecnológico dedicado a ofrecer soluciones integrales en
                            mantenimiento, reparación y administración de equipos de cómputo y redes. Nuestra misión es
                            impulsar el cambio positivo en el sector tecnológico, destacándonos por prácticas
                            sostenibles y servicios de alta calidad.</p>
                        <a class="cta-btn" href="#">Vuelva al inicio</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->
    </main><!-- End #main -->
    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">

        </div>
    </section><!-- End Services Section -->
@endsection
