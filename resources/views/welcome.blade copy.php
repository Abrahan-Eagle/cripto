    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- 🔹 Meta Title dinámico y optimizado -->
        <title>Uniblock | @yield('title', 'Soluciones Tech: Automatización, IA & Consultoría Digital')</title>


        <!-- 🔹 Meta Description actualizada con enfoque en IA y automatización -->
        <meta name="description" content="Agencia líder en desarrollo de software, automatización de redes e inteligencia artificial. Consultoría tecnológica especializada. Transformamos negocios con soluciones digitales avanzadas. +200% eficiencia operativa para nuestros clientes.">

        <!-- 🔹 Keywords actualizadas con enfoque tecnológico -->
        <meta name="keywords" content="automatización redes informáticas, inteligencia artificial empresarial, consultoría tecnológica, desarrollo software personalizado, marketing digital avanzado, SEO técnico, machine learning, transformación digital, ciberseguridad, cloud computing, IoT empresarial, big data, chatbots inteligentes, blockchain, desarrollo Laravel, UX/UI premium, DevOps, arquitectura de redes, virtualización, soluciones ERP, CRM personalizado">


        <!-- 🔹 Open Graph (SEO para redes sociales) -->
        <meta property="og:title" content="Uniblock - Agencia de Marketing Digital y Desarrollo de Software | Transformación Digital para Empresas [Casos de Éxito]">
        <meta property="og:description" content="De la idea al éxito digital: Desarrollo web, apps móviles y estrategias de crecimiento comprobadas. Solicita tu auditoría SEO gratuita. Especialistas en SEO, branding digital y desarrollo de software. ¡Lleva tu negocio al siguiente nivel con Uniblock!">
        <meta property="og:image" content="{{ asset('img/logox.jpg') }}">
        <meta property="og:site_name" content="Uniblock Digital Solutions">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">


        <!-- 🔹 Twitter Cards (Optimización para Twitter) -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:creator" content="@uniblock_web">
        <meta name="twitter:title" content="🚀 Uniblock | Soluciones Tech para Emprendedores [Guía 2024] - Agencia de Marketing Digital y Desarrollo de Software">
        <meta name="twitter:description" content="Especialistas en automatización de redes, inteligencia artificial y consultoría tecnológica. Transformación digital con resultados medibles. ¿Listo para optimizar tus operaciones? Primeros resultados en 30 días ⏱️">
        <meta name="twitter:image" content="{{ asset('img/logox.jpg') }}">

    <!-- Favicons para múltiples dispositivos y navegadores -->
        <!-- ================================================== -->
        <!-- Versiones Apple Touch Icon (iOS/Safari) -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">

        <!-- Versiones estándar de favicon -->
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">

        <!-- Favicon clásico .ico (compatible con navegadores antiguos) -->
        <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon">

        <!-- Configuración de manifiesto para aplicaciones web progresivas -->
        <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">

        <!-- Configuración para Microsoft -->
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
        <meta name="msapplication-config" content="{{ asset('img/favicon/browserconfig.xml') }}">

        <!-- Color del tema para navegadores móviles -->
        <meta name="theme-color" content="#ffffff">

        <!-- 🔹 Google Fonts optimizados -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <!-- Optimizar Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

        <!-- Font Awesome con preload -->
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <link rel="canonical" href="{{ URL::current() }}">

        <meta property="og:whatsapp:message" content="Descubre cómo Uniblock puede impulsar tu negocio digital">

        <meta property="tt:app_id" content="tu_app_id">
        <meta property="tt:page" content="uniblockweb">

        <meta name="google-site-verification" content="TYNJ9-Q7v2hBN7RGqKbUYhBYgmlkA6emzBWQtnRSlR8" />

        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5TCLJFK7');</script>

        <style>
            @font-face {
            font-family: 'TuFuente';
            src: url('/fonts/ElegantIcons.woff');
            font-display: swap; /* Muestra texto temporal hasta cargar fuente */
            }
        </style>


<!-- End Google Tag Manager -->

        <!-- 🔹 CSS compilado por Laravel Mix -->
        <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">


        @yield('styles')
<!-- En el head -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">


    </head>
    <body>


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-light sticky-top" data-navbar-darken-on-scroll="900">
        <div class="container pt-2"><a class="navbar-brand" href="index.html"> <img src="assets/img/gallery/logo.png" alt="..." /></a>
          <div class="navbar-nav ms-auto">
            <button class="btn btn-secondary">Login</button>
          </div>
        </div>
      </nav>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="mt-6">

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-9 col-lg-8 col-xl-5">
              <h1 class="display-3 lh-sm">Landing Template for Startups</h1>
            </div>
            <div class="col-md-9 col-xl-5">
              <p class="fs-2">Our landing page template works on all devices, and browsers, so you only have to set it up once, and get beautiful results forever.</p>
              <button class="btn btn-primary mt-3">Pricing and Plans</button>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container"><img class="img-fluid" src="assets/img/gallery/dashboard.png" alt="Dashboard" />
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row mx-md-5 px-md-5 d-flex justify-content-evenly">
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="assets/img/gallery/brands/google.png" alt="Google" style="height:30px;" /></div>
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="assets/img/gallery/brands/slack.png" alt="Slack" style="height:30px;" /></div>
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="assets/img/gallery/brands/amazon.png" alt="Amazon" style="height:30px;" /></div>
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="assets/img/gallery/brands/zoom.png" alt="Zoom" style="height:30px;" /></div>
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="assets/img/gallery/brands/netflix.png" alt="Netflix" style="height:30px;" /></div>
          </div>
          <div class="px-xl-8 px-md-7">
            <hr class="mt-7 text-1000" />
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <h1 class="display-6 fw-semi-bold"> Feature</h1>
          <p class="fs-2">Our landing page template works on all devices, so you only have to set.</p>
          <div class="row mb-4 mt-6">
            <div class="col-md-6">
              <div class="border rounded-1 border-700 h-100 features-items">
                <div class="p-5"><img src="assets/img/gallery/dashboardicon.png" alt="Dashboard" style="width:48px;height:48px;" />
                  <h3 class="pt-3 lh-base">Dashboard</h3>
                  <p class="mb-0">A pseudo-Latin text used in web design, layout, and printing in place of things to emphasise layouts for previewing layouts and visual mockups.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="border rounded-1 border-700 h-100 features-items">
                <div class="p-5"><img src="assets/img/gallery/comment.png" alt="Comment" style="width:48px;height:48px;" />
                  <h3 class="pt-3 lh-base">Comment</h3>
                  <p class="mb-0">A pseudo-Latin text used in web design, layout, and printing in place of things to emphasise layouts for previewing layouts and visual mockups.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="border rounded-1 border-700 h-100 features-items">
                <div class="p-5"><img src="assets/img/gallery/trilored.png" alt="Tailored" style="width:48px;height:48px;" />
                  <h3 class="pt-3 lh-base">Tailored</h3>
                  <p class="mb-0">A pseudo-Latin text used in web design, layout, and printing in place of things to emphasise layouts for previewing layouts and visual mockups.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="border rounded-1 border-700 h-100 features-items">
                <div class="p-5"><img src="assets/img/gallery/statistics.png" alt="Statistic" style="width:48px;height:48px;" />
                  <h3 class="pt-3 lh-base">Statistic</h3>
                  <p class="mb-0">A pseudo-Latin text used in web design, layout, and printing in place of things to emphasise layouts for previewing layouts and visual mockups.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="border rounded-1 border-700 h-100 features-items">
                <div class="p-5"><img src="assets/img/gallery/profile.png" alt="Profiles" style="width:48px;height:48px;" />
                  <h3 class="pt-3 lh-base">Profiles</h3>
                  <p class="mb-0">A pseudo-Latin text used in web design, layout, and printing in place of things to emphasise layouts for previewing layouts and visual mockups.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="border rounded-1 border-700 h-100 features-items">
                <div class="p-5"><img src="assets/img/gallery/folder.png" alt="Folders" style="width:48px;height:48px;" />
                  <h3 class="pt-3 lh-base">Folders</h3>
                  <p class="mb-0">A pseudo-Latin text used in web design, layout, and printing in place of things to emphasise layouts for previewing layouts and visual mockups.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="mt-5">

        <div class="container">
          <div class="text-center">
            <div class="p-5 bg-primary rounded-3">
              <div class="py-3">
                <h4 class="opacity-50 ls-2 lh-base fw-medium">READY TO START</h4>
                <h2 class="mt-3 fs-4 fs-sm-7 latter-sp-3 lh-base fw-semi-bold">Start Your Free Trail Today </h2>
              </div>
              <div class="flex-center d-flex">
                <button class="btn btn-info">Get Started <span class="fas fa-arrow-right"></span></button>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="mt-5">

        <div class="container">
          <div class="text-center">
            <p class="fs-2 ls-2">SAFLOW</p>
            <h1 class="display-6 fw-semi-bold">How does it work?</h1>
          </div>
          <div class="row mt-6 flex-center justify-content-xl-evenly px-xl-5">
            <div class="col-md-7 col-lg-6 order-md-1"><img class="w-100" src="assets/img/gallery/comment1.png" alt="..." /></div>
            <div class="col-md-5 col-lg-4">
              <h3 class="fs-xl-7 fs-lg-4 fs-md-3 mt-5 mt-md-0">How does it work?</h3>
              <p class="fs-xl-1 ls-3 pe-xl-2"> Our landing page template works on all devices, so you only have to set it up once, and get beautiful results.</p>
            </div>
          </div>
          <div class="row mt-6 flex-center justify-content-xl-evenly px-xl-5">
            <div class="col-md-7 col-lg-6 false"><img class="w-100" src="assets/img/gallery/comment2.png" alt="..." /></div>
            <div class="col-md-5 col-lg-4">
              <h3 class="fs-xl-7 fs-lg-4 fs-md-3 mt-5 mt-md-0">How does it work?</h3>
              <p class="fs-xl-1 ls-3 pe-xl-2"> Our landing page template works on all devices, so you only have to set it up once, and get beautiful results.</p>
            </div>
          </div>
          <div class="row mt-6 flex-center justify-content-xl-evenly px-xl-5">
            <div class="col-md-7 col-lg-6 order-md-1"><img class="w-100" src="assets/img/gallery/comment3.png" alt="..." /></div>
            <div class="col-md-5 col-lg-4">
              <h3 class="fs-xl-7 fs-lg-4 fs-md-3 mt-5 mt-md-0">How does it work?</h3>
              <p class="fs-xl-1 ls-3 pe-xl-2"> Our landing page template works on all devices, so you only have to set it up once, and get beautiful results.</p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container-lg">
          <div class="text-center">
            <p class="fs-2 ls-2">SAFLOW</p>
            <h1 class="display-6 fw-semi-bold">Pricing</h1>
          </div>
          <div class="row flex-center">
            <div class="col-sm-9 col-md-4 mt-3">
              <div class="py-5 px-4 px-md-3 px-lg-4 rounded-1 bg-800 plans-cards mt-md-9">
                <p class="fs-2 ls-2">FREE</p>
                <h1 class="display-4 ls-3"><span class="text-600">$</span>0</h1>
                <hr class="hr mt-6 text-1000" />
                <ul class="mt-5 ps-0">
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>7,000,000+ Events</li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>4 Custom Domains</li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Dedicated Support </li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>12 Months History</li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>1 Dedicated SSL</li>
                </ul>
                <button class="btn btn-gray mt-4">Get Started <span class="fas fa-arrow-right"></span></button>
              </div>
            </div>
            <div class="col-sm-9 col-md-4 mt-3">
              <div class="py-5 px-4 px-md-3 px-lg-4 rounded-1 bg-800 plans-cards mt-0">
                <p class="fs-2 ls-2">BASIC</p>
                <h1 class="display-4 ls-3"><span class="text-600">$</span>23</h1>
                <hr class="hr mt-6 text-1000" />
                <ul class="mt-5 ps-0">
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>7,000,000+ Events</li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>4 Custom Domains</li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Dedicated Support </li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>12 Months History</li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>1 Dedicated SSL</li>
                </ul>
                <button class="btn btn-gray mt-4">Get Started <span class="fas fa-arrow-right"></span></button>
              </div>
            </div>
            <div class="col-sm-9 col-md-4 mt-3">
              <div class="py-5 px-4 px-md-3 px-lg-4 rounded-1 bg-800 plans-cards mt-md-9">
                <p class="fs-2 ls-2">PREMIUM</p>
                <h1 class="display-4 ls-3"><span class="text-600">$</span>59</h1>
                <hr class="hr mt-6 text-1000" />
                <ul class="mt-5 ps-0">
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>7,000,000+ Events</li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>4 Custom Domains</li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Dedicated Support </li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>12 Months History</li>
                  <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>1 Dedicated SSL</li>
                </ul>
                <button class="btn btn-gray mt-4">Get Started <span class="fas fa-arrow-right"></span></button>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="text-center text-xl-start">
            <div class="p-5 bg-primary rounded-3 d-flex flex-column justify-content-xl-between flex-xl-row">
              <div class="py-3">
                <h4 class="opacity-50 ls-2 lh-base fw-medium">READY TO START</h4>
                <h2 class="mt-3 fs-4 fs-sm-7 latter-sp-3 lh-base fw-semi-bold">Start Your Free Trail Today </h2>
              </div>
              <div class="flex-center d-flex">
                <button class="btn btn-info">Get Started <span class="fas fa-arrow-right"></span></button>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-secondary">

        <div class="container">
          <div class="row">
            <div class="col-xl-3 text-center text-xl-start"><a href="#!"><img class="footer-img me-xl-5 me-3" src="assets/img/gallery/facebook-line1.svg" alt="fb" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="assets/img/gallery/linkedin-line1.svg" alt="in" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="assets/img/gallery/twitter-line1.svg" alt="twitter" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="assets/img/gallery/instagram-line1.svg" alt="instragram" style="width:20px;height:20px;" /></a>
            </div>
            <div class="col-xl-4 pt-2 pt-xl-0">
              <p class="mb-0 text-center text-xl-end"><a class="text-300 text-decoration-none footer-link" href="#!"> Terms &amp; conditon </a><a class="text-300 text-decoration-none footer-link ps-4" href="#!">Privacy Policy </a>
              </p>
            </div>
            <div class="col-xl-5 pt-2 pt-xl-0 text-center text-xl-end">
              <p class="mb-0">&copy; This template is made with ❤️ by <a class="text-300" href="https://themewagon.com/" target="_blank"> ThemeWagon</a></p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->

    </body>
    </html>
