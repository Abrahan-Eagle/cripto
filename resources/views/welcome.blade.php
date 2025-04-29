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

        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TCLJFK7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Contenido del template -->

            <!-- Page Preloder -->
            <div id="preloder">
                <div class="loader"></div>
            </div>

            <link rel="preload" href="/fonts/ElegantIcons.woff" as="font" crossorigin>

            <!-- Header Section Begin -->
            <header class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="header__logo">



                                <a href="{{ url('/') }}">
                                    <img loading="lazy" src="{{ asset('img/logo_uniblock_01.png') }}" alt="Uniblock Tech">
                                </a>


                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="header__nav__option">
                                <nav class="header__nav__menu mobile-menu">
                                    <ul>
                                        <li class="{{Request::is('/')?'active':''}}"><a href="{{url('/')}}">Home</a></li>
                                        <li class="{{Request::is('about')?'active':''}}"><a href="{{url('/about')}}">Nosotros</a></li>
                                        <li class="{{Request::is('projects')?'active':''}}"><a href="{{url('/projects')}}">Proyectos</a></li>
                                        <li class="{{Request::is('services')?'active':''}}"><a href="{{url('/services')}}">Servicios</a></li>
                                        <li class="{{Request::is('blog')?'active':''}}"><a href="{{url('/blog')}}">Blog</a></li>
                                        <li class="{{Request::is('contact')?'active':''}}"><a href="{{url('/contact')}}">Contactanos</a></li>
                                        <li>
                                            @if (Route::has('login'))
                                                {{-- @guest
                                                    <a href="#" target="_blank">Login</a>
                                                    <ul class="dropdown">
                                                        <li><a href="{{ route('login') }}">Login</a></li>
                                                        @if (Route::has('register'))
                                                            <li><a href="{{ route('register') }}">Registrar</a></li>
                                                        @endif
                                                    </ul>
                                                @endguest --}}
                                                @auth
                                                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                                                @endauth
                                            @endif
                                        </li>
                                    </ul>
                                </nav>
                                <div class="header__nav__social">
                                    <a href="https://www.facebook.com/share/15BxbhMkQw/?mibextid=qi2Omg" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/uniblocktech/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.tiktok.com/@uniblocktech2" target="_blank"><i class="fa fa-tiktok"></i></a>
                                    <a href="https://www.linkedin.com/company/uniblock-tech" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </header>
            <!-- Header End -->

            <!-- ***************************************************** END NAVBAR ***************************************************** -->
            <!-- *****************************************************   CENTER   ***************************************************** -->

            @yield('content')

            <!-- ***************************************************** END CENTER ***************************************************** -->
            <!-- *****************************************************  FOOTER ***************************************************** -->





            <!-- Pie de Página Comienza -->
            <footer class="footer">
                <div class="container">
                    <div class="footer__top">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="footer__top__logo">
                                    <a href="{{ url('/') }}"><img loading="lazy" style="max-width: 30% !important;" src="{{asset('img/logo_uniblock_01.png')}}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="footer__top__social">
                                    <a href="https://www.facebook.com/share/15BxbhMkQw/?mibextid=qi2Omg" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/uniblocktech/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.tiktok.com/@uniblocktech2" target="_blank"><i class="fa fa-tiktok"></i></a>
                                    <a href="https://www.linkedin.com/company/uniblock-tech" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__option">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="footer__option__item">
                                    <h5>Sobre nosotros</h5>
                                    <p>Uniblock es una empresa con más de 15 años de experiencia en desarrollo de software, consultoría, marketing digital y modelado de arquitectura 3D.</p>
                                    <a href="{{ url('/about') }}" class="read__more">Leer más <span class="arrow_right"></span></a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <div class="footer__option__item">
                                    <h5>Quiénes somos</h5>
                                    <ul>
                                        {{-- <li><a href="#" target="_blank">Equipo</a></li>
                                        <li><a href="#" target="_blank">Contáctanos</a></li> --}}



                                        <li class="{{Request::is('about')?'active':''}}"><a href="{{url('/about')}}">Nosotros</a></li>
                                        <li class="{{Request::is('services')?'active':''}}"><a href="{{url('/services')}}">Servicios</a></li>
                                        <li class="{{Request::is('blog')?'active':''}}"><a href="{{url('/blog')}}">Blog</a></li>
                                        <li class="{{Request::is('contact')?'active':''}}"><a href="{{url('/contact')}}">Contactanos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-3">
                                <div class="footer__option__item">
                                    <h5>Nuestro trabajo</h5>
                                    <ul>
                                        <li><a href="#" target="_blank">Destacados</a></li>
                                        <li><a href="#" target="_blank">Últimos</a></li>
                                        <li><a href="#" target="_blank">Archivo</a></li>
                                        <li><a href="#" target="_blank">Video para web</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="footer__option__item">
                                    <h5>Newsletter</h5>
                                    <p>Mantente atento a nuestras actualizaciones, noticias, promociones y más.</p>


                                    {{-- <form action="{{ route('newsletter.submit') }}" method="POST">
                                        @csrf
                                        <input class="form-control" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enviar Correo Electrónico'"
                                            placeholder='Enviar Correo Electrónico' required>


                                         <!-- Widget de reCAPTCHA -->
                                        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                                        @error('g-recaptcha-response')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror


                                        <button type="submit"><i class="fa fa-send"></i></button>
                                    </form> --}}




                                    <form action="{{ route('newsletter.submit') }}" method="POST">
                                        @csrf
                                        <input
                                            class="form-control"
                                            name="email"
                                            id="email"
                                            type="email"
                                            onfocus="mostrarMensaje()"
                                            onblur="ocultarMensaje()"
                                            placeholder="Enviar Correo Electrónico"
                                            required
                                        >

                                        <div id="mensajeEmail" style="display: none; color: #888; font-size: 0.9rem; margin-top: 5px;">
                                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                                            @error('g-recaptcha-response')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <button type="submit">
                                            <i class="fa fa-send"></i>
                                        </button>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__copyright">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <p class="footer__copyright__text">Derechos de autor &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    Todos los derechos reservados. Uniblockweb es creado con ❤️ por
                                    <a href="{{ url('/') }}" target="_blank" style="color: #007bff; text-decoration: none;">Uniblockweb</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Pie de Página Finaliza -->



        <!-- JS compilado por Laravel Mix -->
        {{-- <script src="{{ asset('js/vendor.js') }}"></script> --}}
        <script src="{{ asset('js/vendor.js') }}" defer></script>



                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<!-- Antes de cerrar el body -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script async src="https://www.google.com/recaptcha/api.js"></script>


<script>
    function mostrarMensaje() {
        document.getElementById('mensajeEmail').style.display = 'block';
    }

    // function ocultarMensaje() {
    //     document.getElementById('mensajeEmail').style.display = 'none';
    // }


    function ocultarMensaje() {
        // Ocultar después de 30 segundos (30000 ms)
        timeoutID = setTimeout(() => {
            document.getElementById('mensajeEmail').style.display = 'none';
        }, 10000);
    }
</script>



    </body>
    </html>
