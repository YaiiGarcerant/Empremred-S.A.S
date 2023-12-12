@extends('layouts.app')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/mantenimiento.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Services</h2>
              <p>Somos líderes en el mercado donde ofrecemos productos y servicios de alta calidad, innovadores, basados en herramientas profesionales de última tecnología TI, a precios adecuados para la mayor parte del mercado así como también conservamos un ambiente sano de contaminación de los desechos eléctricos y electrónicos dándole un trato adecuado para su uso artesanal o de recuperación.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Services</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->



    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Services</span>
          <h2>Our Services</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/storage-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Mantenimiento Proactivo</a></h3>
              <p>Cuando confías en nosotros, tu tecnología recibe atención personalizada. Realizamos chequeos regulares para asegurarnos de que tus dispositivos estén siempre en óptimas condiciones. Nos anticipamos a problemas potenciales, aplicando ajustes y actualizaciones para garantizar un rendimiento continuo.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/logistics-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Reparación Especializada:</a></h3>
              <p>Cuando tus dispositivos encuentran obstáculos, estamos aquí para solucionarlos rápidamente. Nuestro equipo de expertos aborda cualquier problema, desde inconvenientes de software hasta cuestiones de hardware. Restauramos tus dispositivos a su máximo potencial, minimizando el tiempo que estás sin ellos</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Administración Eficiente</a></h3>
              <p>Gestionamos tu tecnología de manera integral. Desde la configuración inicial hasta la seguridad y actualizaciones continuas, nos encargamos de todo. Nos aseguramos de que tu tecnología esté siempre actualizada, segura y lista para cumplir con tus necesidades.</p>
            </div>
          </div><!-- End Card Item -->

          
        </div>

      </div>
    </section><!-- End Services Section -->
<!-- ======= Horizontal Pricing Section ======= -->
<section id="horizontal-pricing" class="horizontal-pricing pt-0">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <span>Horizontal Pricing</span>
      <h2>Horizontal Pricing</h2>

    </div>

    <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <h3>Free Plan</h3>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <h4><sup>$</sup>0<span> / month</span></h4>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <ul>
          <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
          <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
          <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
        </ul>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
      </div>
    </div><!-- End Pricing Item -->

    <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <h3>Business Plan</h3>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <h4><sup>$</sup>29<span> / month</span></h4>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <ul>
          <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
          <li><i class="bi bi-check"></i> <strong>Nec feugiat nisl pretium</strong></li>
          <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
        </ul>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
      </div>
    </div><!-- End Pricing Item -->

    <div class="row gy-4 pricing-item mt-4" data-aos="fade-up" data-aos-delay="300">
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <h3>Developer Plan</h3>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <h4><sup>$</sup>49<span> / month</span></h4>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <ul>
          <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
          <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
          <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
        </ul>
      </div>
      <div class="col-lg-3 d-flex align-items-center justify-content-center">
        <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
      </div>
    </div><!-- End Pricing Item -->

  </div>
</section><!-- End Horizontal Pricing Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Frequently Asked Questions</span>
          <h2>Frequently Asked Questions</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Cada cuanto debemos hacerle mantenimiento a nuestras pc?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    En definitiva, por lo general es recomendable hacer una revisión/limpieza de mi pc cada 5 a 6 meses
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿es importante cuidar la vida util de nuestras laptops?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Es importante mantener la batería de la laptop entre el 20 y el 80 % de su capacidad, por ello tampoco es recomendable dejar el PC cargando toda ..
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Qué cosas pueden ocasionar que los computadores sufran daños?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Usar productos inadecuados para limpiarla, Dejar que se acumule el polvo, Obstruir las entradas de aire, Conectarlo directamente a la fuente de energía, Irse a los "extremos" por dentro.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿Qué computador es bueno y barato?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Lenovo IdeaPad Duet ChromeBook, Acer Swift 3 SF314, HP 15s-eq2118ns, Microsoft Surface Laptop Go, ASUS ROG G513IC-HN004.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    ¿se demora mucho el mantenimiento de un computador?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    normalmente al dia siguiente o el mismo dia estamos entragando tu pc en mejores condiciones
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->
@endsection