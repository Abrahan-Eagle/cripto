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

    <link rel="stylesheet" crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==">



    @yield('styles')
<!-- En el head -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">


</head>
<body>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">

    <nav class="navbar navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container py-2 d-flex justify-content-between align-items-center">
          <!-- Logo -->
          <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <span class="fs-4 fw-bold">AlphaTrade</span>
          </a>

          <div class="position-relative">
            @if (Route::has('login'))
              @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-secondary px-4 py-2">Dashboard</a>
              @else
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle px-4 py-2" type="button" id="loginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="loginDropdown">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar sesión</a></li>
                    @if (Route::has('register'))
                      <li><a class="dropdown-item" href="{{ route('register') }}">Registrar</a></li>
                    @endif
                  </ul>
                </div>
              @endauth
            @endif
          </div>
        </div>
      </nav>




  <!-- ============================================-->
  <!-- <section> begin ============================-->
    <section class="mt-6 py-5 bg-dark text-light">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-10 col-xl-8">
              <h1 class="display-3 fw-bold lh-sm mb-4">
                🚀 Automatiza tu Trading y Opera Como un Experto 24/7
              </h1>
              <p class="fs-4 mb-4">
                Conecta tu cuenta de exchange y deja que nuestros bots inteligentes operen por ti 24/7.
                Usamos tecnología de trading automatizado basada en Freqtrade para maximizar tus ganancias con mínimo esfuerzo.
              </p>
              <a href="#planes" class="btn btn-primary btn-lg px-4 py-2">
                Descubre Nuestros Planes
              </a>
            </div>
          </div>
        </div>
      </section>

  <!-- <section> close ============================-->
  <!-- ============================================-->




  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section>

    <div class="container"><img class="img-fluid" src="{{ asset('img/gallery/dashboard.png') }}" alt="Dashboard" />
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
        <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/google.png') }}" alt="Google" style="height:30px;" /></div>
        <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/slack.png') }}" alt="Slack" style="height:30px;" /></div>
        <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/amazon.png') }}" alt="Amazon" style="height:30px;" /></div>
        <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/zoom.png') }}" alt="Zoom" style="height:30px;" /></div>
        <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/netflix.png') }}" alt="Netflix" style="height:30px;" /></div>
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
      <h1 class="display-6 fw-semi-bold"> Características del Sistema</h1>
      <p class="fs-2">Tu nuevo asistente personal de trading, impulsado por inteligencia artificial y análisis técnico automatizado.</p>
      <div class="row mb-4 mt-6">
        <div class="col-md-6">
          <div class="border rounded-1 border-700 h-100 features-items">
            <div class="p-5"><img src="{{ asset('img/gallery/dashboardicon.png') }}" alt="Dashboard" style="width:48px;height:48px;" />
              <h3 class="pt-3 lh-base">Panel de Control</h3>
              <p class="mb-0">Visualiza operaciones, ganancias y desempeño de tus bots en tiempo real desde cualquier dispositivo.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border rounded-1 border-700 h-100 features-items">
            <div class="p-5"><img src="{{ asset('img/gallery/comment.png') }}" alt="Comment" style="width:48px;height:48px;" />
              <h3 class="pt-3 lh-base">Bots Inteligentes</h3>
              <p class="mb-0">Estrategias optimizadas que analizan el mercado y ejecutan órdenes automáticamente por ti.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-6">
          <div class="border rounded-1 border-700 h-100 features-items">
            <div class="p-5"><img src="{{ asset('img/gallery/trilored.png') }}" alt="Tailored" style="width:48px;height:48px;" />
              <h3 class="pt-3 lh-base">Estrategias Personalizables</h3>
              <p class="mb-0">Crea o ajusta tus propias estrategias usando indicadores técnicos como RSI, MACD, EMA, y más.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border rounded-1 border-700 h-100 features-items">
            <div class="p-5"><img src="{{ asset('img/gallery/statistics.png') }}" alt="Statistic" style="width:48px;height:48px;" />
              <h3 class="pt-3 lh-base">Gestión de Riesgos</h3>
              <p class="mb-0">Define tus reglas de pérdida máxima, stop loss y take profit para proteger tu capital.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="border rounded-1 border-700 h-100 features-items">
            <div class="p-5"><img src="{{ asset('img/gallery/profile.png') }}" alt="Profiles" style="width:48px;height:48px;" />
              <h3 class="pt-3 lh-base">Backtesting Avanzado</h3>
              <p class="mb-0">Simula tus estrategias con datos históricos antes de invertir dinero real.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="border rounded-1 border-700 h-100 features-items">
            <div class="p-5"><img src="{{ asset('img/gallery/folder.png') }}" alt="Folders" style="width:48px;height:48px;" />
              <h3 class="pt-3 lh-base">Multi-exchange y Multi-wallet</h3>
              <p class="mb-0">Soporte para múltiples cuentas de exchanges y carteras simultáneamente.</p>
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
            <h4 class="opacity-50 ls-2 lh-base fw-medium">Maximiza tus Resultados</h4>
            <h2 class="mt-3 fs-4 fs-sm-7 latter-sp-3 lh-base fw-semi-bold">Nuestro sistema opera por ti incluso mientras duermes.</h2>
          </div>
          <div class="flex-center d-flex">
            <a href="{{ route('register') }}" class="btn btn-info">Comenzar ahora</a>
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
        <p class="fs-2 ls-2">¿Cómo funciona?</p>
        <h1 class="display-6 fw-semi-bold">¿Cómo funciona?</h1>
      </div>
      <div class="row mt-6 flex-center justify-content-xl-evenly px-xl-5">
        <div class="col-md-7 col-lg-6 order-md-1"><img class="w-100" src="{{ asset('img/gallery/comment1.png') }}" alt="..." /></div>
        <div class="col-md-5 col-lg-4">
          <h3 class="fs-xl-7 fs-lg-4 fs-md-3 mt-5 mt-md-0">Regístrate gratis</h3>
          <p class="fs-xl-1 ls-3 pe-xl-2"> Crea tu cuenta en minutos y accede a tu panel de trading.</p>
        </div>
      </div>
      <div class="row mt-6 flex-center justify-content-xl-evenly px-xl-5">
        <div class="col-md-7 col-lg-6 false"><img class="w-100" src="{{ asset('img/gallery/comment2.png') }}" alt="..." /></div>
        <div class="col-md-5 col-lg-4">
          <h3 class="fs-xl-7 fs-lg-4 fs-md-3 mt-5 mt-md-0">Conecta tu Exchange</h3>
          <p class="fs-xl-1 ls-3 pe-xl-2"> Usa tus API Keys para conectar exchanges como Binance, KuCoin, Kraken, etc.</p>
        </div>
      </div>
      <div class="row mt-6 flex-center justify-content-xl-evenly px-xl-5">
        <div class="col-md-7 col-lg-6 order-md-1"><img class="w-100" src="{{ asset('img/gallery/comment3.png') }}" alt="..." /></div>
        <div class="col-md-5 col-lg-4">
          <h3 class="fs-xl-7 fs-lg-4 fs-md-3 mt-5 mt-md-0">Elige una Estrategia</h3>
          <p class="fs-xl-1 ls-3 pe-xl-2">Selecciona entre estrategias predefinidas o configura la tuya desde cero.</p>
        </div>
      </div>

      <div class="row mt-6 flex-center justify-content-xl-evenly px-xl-5">
        <div class="col-md-7 col-lg-6 false"><img class="w-100" src="{{ asset('img/gallery/comment2.png') }}" alt="..." /></div>
        <div class="col-md-5 col-lg-4">
          <h3 class="fs-xl-7 fs-lg-4 fs-md-3 mt-5 mt-md-0">Activa tu Bot</h3>
          <p class="fs-xl-1 ls-3 pe-xl-2"> El bot comenzará a analizar el mercado y ejecutar operaciones automáticamente.</p>
        </div>
      </div>
      <div class="row mt-6 flex-center justify-content-xl-evenly px-xl-5">
        <div class="col-md-7 col-lg-6 order-md-1"><img class="w-100" src="{{ asset('img/gallery/comment3.png') }}" alt="..." /></div>
        <div class="col-md-5 col-lg-4">
          <h3 class="fs-xl-7 fs-lg-4 fs-md-3 mt-5 mt-md-0">Controla y ajusta</h3>
          <p class="fs-xl-1 ls-3 pe-xl-2">Desde tu panel puedes ver el rendimiento, pausar, cambiar de estrategia o retirar ganancias.</p>
        </div>
      </div>

    </div>
    <!-- end of .container-->

  </section>
  <!-- <section> close ============================-->
  <!-- ============================================-->




  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section id="planes">

    <div class="container-lg">
      <div class="text-center">
        <p class="fs-2 ls-2">Accede al mundo del trading automatizado desde donde estés.</p>
        <h1 class="display-6 fw-semi-bold">Planes y Precios</h1>
      </div>
      <div class="row flex-center">
        <div class="col-sm-9 col-md-4 mt-3">
          <div class="py-5 px-4 px-md-3 px-lg-4 rounded-1 bg-800 plans-cards mt-md-9">
            <p class="fs-2 ls-2"> Free </p>
            <h1 class="display-4 ls-3"><span class="text-600">$</span> 0</h1>
            <hr class="hr mt-6 text-1000" />
            <ul class="mt-5 ps-0">
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Simulación de estrategias (sin dinero real)</li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Backtesting con datos históricos</li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Acceso limitado a funciones </li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>1 estrategia predefinida</li>
            </ul>
             <a href="{{ route('register') }}" class="btn btn-info">Comenzar ahora</a>
          </div>
        </div>
        <div class="col-sm-9 col-md-4 mt-3">
          <div class="py-5 px-4 px-md-3 px-lg-4 rounded-1 bg-800 plans-cards mt-0">
            <p class="fs-2 ls-2">Básico</p>
            <h1 class="display-4 ls-3"><span class="text-600">$</span> 23</h1>
            <hr class="hr mt-6 text-1000" />
            <ul class="mt-5 ps-0">
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Conexión a 1 exchange real</li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Hasta 3 bots simultáneos</li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Soporte estándar </li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Estadísticas básicas </li>
            </ul>
             <a href="{{ route('register') }}" class="btn btn-info">Comenzar ahora</a>
          </div>
        </div>
        <div class="col-sm-9 col-md-4 mt-3">
          <div class="py-5 px-4 px-md-3 px-lg-4 rounded-1 bg-800 plans-cards mt-md-9">
            <p class="fs-2 ls-2">PREMIUM</p>
            <h1 class="display-4 ls-3"><span class="text-600">$</span> 59</h1>
            <hr class="hr mt-6 text-1000" />
            <ul class="mt-5 ps-0">
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Conexión a varios exchanges</li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Estrategias personalizadas y bots ilimitados</li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Backtesting avanzado </li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Reportes detallados</li>
              <li class="pricing-lists"><i class="fas fa-check-circle fa-lg me-2 text-600"></i>Soporte prioritario </li>
            </ul>
            <a href="{{ route('register') }}" class="btn btn-info">Comenzar ahora</a>
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
            <h4 class="opacity-50 ls-2 lh-base fw-medium">Opera como un profesional</h4>
            <h2 class="mt-3 fs-4 fs-sm-7 latter-sp-3 lh-base fw-semi-bold">¿Estás listo para automatizar tu trading? </h2>
          </div>
          <div class="flex-center d-flex">
            <a href="{{ route('register') }}" class="btn btn-info">Comenzar ahora</a>
          </div>
        </div>
      </div>
    </div>
    <!-- end of .container-->

  </section>
  <!-- <section> close ============================-->
  <!-- ============================================-->






  <section class="bg-secondary">

  <footer>
    <div class="container">
      <div class="row align-items-center">

        <!-- Redes sociales -->
        <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
          <a href="#!" class="me-3"><img src="{{ asset('img/gallery/facebook-line1.svg') }}" alt="Facebook" width="18" height="18" /></a>
          <a href="#!" class="me-3"><img src="{{ asset('img/gallery/linkedin-line1.svg') }}" alt="LinkedIn" width="18" height="18" /></a>
          <a href="#!" class="me-3"><img src="{{ asset('img/gallery/twitter-line1.svg') }}" alt="Twitter" width="18" height="18" /></a>
          <a href="#!"><img src="{{ asset('img/gallery/instagram-line1.svg') }}" alt="Instagram" width="18" height="18" /></a>
        </div>

        <!-- Enlaces legales -->
        <div class="col-md-4 text-center mb-3 mb-md-0">
        <p class="mb-0 text-center text-xl-end">
          <a class="text-300 text-decoration-none footer-link"   href="#!" class="text-decoration-none text-secondary me-3">Términos y Condiciones</a>
          <a class="text-300 text-decoration-none footer-link" href="#!" class="text-decoration-none text-secondary">Política de Privacidad</a>
        </p>
        </div>

        <!-- Créditos -->
        <div class="col-md-4 text-center text-md-end">
          <small>&copy; 2025 Hecho con ❤️ por <a href="https://uniblockweb.com/" class="text-light text-decoration-none" target="_blank">UniblockWeb</a></small>
        </div>

      </div>
    </div>
  </footer>

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

<script src="{{ asset('js/vendor.js') }}" defer></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
