<?php

?>

<!DOCTYPE html>
<html lang="es" prefix="og: https://valordeltiempo.com">
<head>
  <meta charset="UTF-8">

  <meta name="google-adsense-account" content="ca-pub-7712765517917992">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ValordelTiempo - Calculadora de Salario Neto</title>
  
  <!-- General Meta Tags -->
  <meta name="title" content="ValordelTiempo - Calculadora de Salario Neto">
  <meta name="description" content="Calculadora de salario neto en base a salario bruto mensual, conoce tu aporte de impuesto a la renta y el seguro social costarricense por mes">
  <meta name="keywords" content="salario neto, salario bruto, costa rica, valor del tiempo, valordeltiempo, salarios costa rica, análisis de salario neto, análisis de salario bruto, impuesto a la renta, impuestos">
  <meta name="image" content="assets/images/favicon.png">
  
  <!-- General Meta Tags - Different Syntax -->
  <meta itemprop="name" content="Calculadora de Salario Neto">
  <meta itemprop="description" content="Calculadora de salario neto en base a salario bruto mensual, conoce tu aporte de impuesto a la renta y el seguro social costarricense por mes">
  <meta itemprop="image" content="assets/images/favicon.png">
  <link rel="canonical" href="https://valordeltiempo.com" />
  
  <!-- Open Graph Meta Tags -->
  <meta property="og:url" content="https://valordeltiempo.com">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/images/favicon.png">
  <meta property="og:description" content="Calculadora de salario neto en base a salario bruto mensual, conoce tu aporte de impuesto a la renta y el seguro social costarricense por mes">
  <meta property="og:title" content="Calculadora de Salario Neto">
  <meta property="og:site_name" content="Calculadora de Salario Neto">
  
  <!-- Twitter/X Meta Tags -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="https://valordeltiempo.com">
  <meta name="twitter:title" content="Calculadora de Salario Neto">
  <meta name="twitter:description" content="Calculadora de salario neto en base a salario bruto mensual, conoce tu aporte de impuesto a la renta y el seguro social costarricense por mes">
  <meta name="twitter:image" content="assets/images/favicon.png">

  <!-- Favicons -->
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
  <link rel="icon" href="assets/images/favicon.png" type="image/png" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Google Ads Script -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7712765517917992"
  crossorigin="anonymous"></script>

</head>
<body class="index-page p-1">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a aria-label="Link al sitio web valor del tiempo" href="index.php" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">ValordelTiempo</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Inicio<br></a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/images/map.png" alt="Imagen de fondo" class="hero-bg" data-aos="fade-in">

      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <div class="alert alert-success" id="mensajed">
            </div>
            <h2 data-aos="fade-up">¿Sabes cuánto vale tu tiempo realmente?</h2>
            <p data-aos="fade-up" data-aos-delay="100">¿Cuánto vale tu tiempo? Descúbrelo sin riesgos. En elvalordeltiempo.com calculamos tu salario neto con precisión y sin guardar tu información. Explora nuestra herramienta y observa cómo cada segundo cuenta. ¡Haz clic ahora y compruébalo por ti mismo!</p>
            <div class="row mb-3">
              <label class="form-label" for="salary">Ingresa tu salario bruto mensual:</label>
              <input class="form-control" type="number" id="salary" value="300000" placeholder="300,000.00" min="0" pattern="^(?=.)(\d{1,3}(,\d{3})*)?(\.\d+)?$" required/>
            </div>
            <div class="row mb-3">
              <label class="form-label" for="hours">Ingresa la horas trabajadas por semana:</label>
              <input class="form-control" type="number" id="workedhours" value="48" placeholder="48" min="0" pattern="^(?=.)(\d{1,3}(,\d{3})*)?(\.\d+)?$" required/>
            </div>
            <div class="row mb-3">
              <button class="btn btn-primary" onclick="calculate()">Calcular</button>
            </div>
            <div class="row mb-3">
              <div class="alert alert-info" id="miniresultadotiempo">
              </div>
              <br/>
              <div class="alert alert-info" id="miniresultadoingreso">
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <div class="container">
              <img src="assets/images/dollar.png" class="img-fluid" alt="Imagen de un dolar">
            </div>
          </div>
        </div>
      </div>
    </section>

      <div id="result" class="row gy-4">
        <br/>
        <section id="alt-pricing" class="alt-pricing section">
          <div class="container section-title" data-aos="fade-up">
            <span>Aporte en impuestos por mes</span>
            <h2 class="title">Aporte en impuestos por mes</h2>
            <p class="description">No más complicaciones con números. Entra a elvalordeltiempo.com, descubre tu salario neto y cuánto vale cada segundo de tu esfuerzo. ¡Prueba nuestra herramienta gratuita ahora!</p>
          </div><!-- End Section Title -->
          <div class="container">
            <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <h3>Aporte Seguro Social</h3>
              </div>
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <h4><sup id="ccss"></sup><span> / mes</span></h4>
              </div>
              <div class="col-lg-2 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="assets/images/ccss.png" alt="Seguro Social de Costa Rica"/>
              </div>
            </div><!-- End Pricing Item -->
            <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <h3>Aporte de Impuesto a la Renta</h3>
              </div>
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <h4><sup id="renta"></sup><span> / mes</span></h4>
              </div>
              <div class="col-lg-2 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="assets/images/hacienda.svg" alt="Ministerio de Hacienda de Costa Rica" />
              </div>
            </div><!-- End Pricing Item -->
          </div>
        </section>

        <!-- Stats section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

          <div class="container section-title" data-aos="fade-up">
            <span>Ingresos en diferentes cantidades de tiempo</span>
            <h2 class="title">Ingresos en diferentes cantidades de tiempo</h2>
            <p class="description">¿Sabes cuánto vale tu tiempo realmente? Descúbrelo en segundos con nuestra herramienta gratuita en elvalordeltiempo.com. Calcula tu salario neto con precisión y visualiza cada segundo de esfuerzo convertido en ingresos. ¡Haz que tus finanzas trabajen a tu favor!</p>
          </div><!-- End Section Title -->

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

              <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                  <span id="seconds"></span>
                  <p>Ingreso por segundo</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                  <span id="minutes"></span>
                  <p>Ingreso por minuto</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                  <span id="hours"></span>
                  <p>Ingreso por hora</p>
                </div>
              </div><!-- End Stats Item -->

              <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                  <span id="days"></span>
                  <p>Ingreso por día</p>
                </div>
              </div><!-- End Stats Item -->

            </div>

          </div>

        </section><!-- /Stats Section -->

        <!-- Stats section finish -->
         
        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">
          <div class="container p-1">
            <div class="row gy-4">
              <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="pricing-item">
                  <h3> <i class="bi bi-cash"></i> &nbsp; Salario Bruto</h3>
                  <h4 id="raw"></h4>
                  <ul>
                    <li><i class="bi bi-buildings-fill"></i> <span> &nbsp;Salario bruto mensual acordado con el patrono</span></li>
                  </ul>
                </div>
              </div><!-- End Pricing Item -->

              <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="pricing-item featured">
                  <h3> <i class="bi bi-cash"></i> &nbsp; Salario Neto</h3>
                  <h4 id="months"></h4>
                  <ul>
                    <li><i class="bi bi-buildings-fill"></i> <span> &nbsp;Aporte del 10.67% al seguro social</span></li>
                    <li><i class="bi bi-buildings-fill"></i> <span> &nbsp;Aporte de impuestos a la renta considerado en base al salario mensual</span></li>
                  </ul>
                </div>
              </div><!-- End Pricing Item -->
            </div>
          </div>
        </section><!-- /Pricing Section -->
        <section id="alt-pricing" class="alt-pricing section">
          <div class="container">
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <span>Ganancias a tiempo real</span>
            <h2>Ganancias a tiempo real</h2>
            <p>¿Cuánto ganas por segundo? Descúbrelo con nuestro ‘taxímetro’ financiero. Introduce tu salario y las horas trabajadas, y deja que la magia suceda en elvalordeltiempo.com. ¡Conocer tu salario neto nunca fue tan simple!</p>
          </div><!-- End Section Title -->
            <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <h4 class="monospace" id="clock"></h4>
              </div>
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <h4><sup id="earnings"></sup><span> / en base al salario neto</span></h4>
              </div>
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <h4><sup id="brutoearnings"></sup><span> / en base al salario bruto</span></h4>
              </div>
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <ul>
                  <li><i class="bi bi-clock-fill"></i> <span> &nbsp;Ganancias en tiempo real</span></li>
                </ul>
              </div>
            </div><!-- End Pricing Item -->

            <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <h4 class="monospace" id="clock2"></h4>
              </div>
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <h4><sup id="earnings2"></sup><span> / en base al salario neto</span></h4>
              </div>
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <h4><sup id="brutoearnings2"></sup><span> / en base al salario bruto</span></h4>
              </div>
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <ul>
                  <li><i class="bi bi-clock-fill"></i> <span> &nbsp;Ganancias a dos veces el tiempo real</span></li>
                </ul>
              </div>
            </div><!-- End Pricing Item -->

            <div class="row pricing-item featured" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <h4 class="monospace" id="clock3"><span></span></h4>
              </div>
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <h4><sup id="earnings3"></sup><span> / en base al salario neto</span></h4>
              </div>
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <h4><sup id="brutoearnings3"></sup><span> / en base al salario bruto</span></h4>
              </div>
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <ul>
                  <li><i class="bi bi-clock-fill"></i> <span> &nbsp;Ganancias a cinco veces el tiempo real</span></li>
                </ul>
              </div>
            </div><!-- End Pricing Item -->
            
          </div>
        </section>
        <!-- Faq Section -->
        <section id="faq" class="faq section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <span>Preguntas comunes</span>
            <h2>Preguntas comunes</h2>
            <p>Información como por ejemplo, los cambios de impuesto a la renta en base al salario bruto mensual o el aporte del seguro social</p>
          </div><!-- End Section Title -->

          <div class="container">

            <div class="row justify-content-center">

              <div class="col-lg-10">

                <div class="faq-container">

                  <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Seguro Social en Costa Rica</h3>
                    <div class="faq-content">
                      <p>En Costa Rica existe un impuesto obligatorio dirigido a la CCSS, el cual es el seguro social del país</p>
                      <br/>
                      <p>En este caso el porcentaje es del: <span>10.64%</span></p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                  <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <i class="faq-icon bi bi-question-circle"></i>
                    <h3>Impuesto a la renta en Costa Rica</h3>
                    <div class="faq-content">
                      <p>En base, al salario bruto mensual, hasta los ₡929,000/00 no hay impuesto como tal</p>
                      <br/>
                      <p>Por otro lado, entre los ₡929,000 y los ₡1,363,000.00 el impuesto es de un %10 sobre el impuesto bruto</p>
                      <br/>
                      <p>Por otro lado, entre los ₡1,363,000 y los ₡2,392,000.00 el impuesto es de un %15 sobre el impuesto bruto</p>
                      <br/>
                      <p>Por otro lado, entre los ₡2,392,000.00 y los ₡4,783,000.00 el impuesto es de un %20 sobre el impuesto bruto</p>
                      <br/>
                      <p>Mientras que, los ingresos mayores a ₡4,783,000.00 tienen un pusto del %25 sobre el impuesto bruto</p>
                    </div>
                    <i class="faq-toggle bi bi-chevron-right"></i>
                  </div><!-- End Faq item-->

                </div>

              </div>

            </div>

          </div>

        </section><!-- /Faq Section -->
      </div>

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-12 footer-about">
          <a aria-label="Link al sitio web valor del tiempo" href="index.php" class="logo d-flex align-items-center">
            <span class="sitename">Calculadora de salario neto</span>
          </a>
          <p>Una herramienta segura, rápida y gratuita. Para nosotros, tu privacidad es nuestra prioridad. Calcula tu salario neto sin preocuparte por tus datos.</p>
          <hr/>
          <p>En este caso el aporte de impuesto a la renta es definido automáticamente en base al ingreso mensual bruto, esto puesto a que difiere de acuerdo a la cantidad</p>
          <div class="social-links d-flex mt-4">
            <a aria-label="Link al sitio de instagram de valor del tiempo" href="https://www.instagram.com/valortiempo"><i class="bi bi-instagram"></i></a>
          </div>
        </div>


        <div class="col-lg-6 col-md-12 footer-contact text-center text-md-start">
          <h4>Contáctenos</h4>
          <hr/>
          <p>valordeltiempo@gmail.com</p>
          <p>Moravia, San Jose</p>
          <p>Costa Rica</p>
        </div>

        <div class="col-lg-12 col-md-12 footer-about text-center text-md-start">
          <hr/>
          <p>¿Cuánto vale tu tiempo? Descúbrelo sin riesgos. En elvalordeltiempo.com calculamos tu salario neto con precisión y sin guardar tu información. Explora nuestro taxímetro y observa cómo cada segundo cuenta.</p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Logis</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a aria-label="Página que tiene diseños de sitios web" href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- JQuery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/functions.js"></script>
<script>

</script>

</body>
</html>
