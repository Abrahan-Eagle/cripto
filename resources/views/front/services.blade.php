@extends('welcome')
@section('title','Uniblock | Agencia de Desarrollo de Software y Marketing Digital [2024]')

@section('meta_title', 'Servicios de Marketing Digital y Desarrollo Web - Uniblock')
@section('meta_description', 'Descubre los servicios profesionales de Uniblock: desarrollo de software a medida, SEO avanzado, marketing digital y diseño web. Soluciones integrales para potenciar tu negocio online.')
@section('meta_keywords', 'servicios desarrollo software, agencia marketing digital, SEO profesional, posicionamiento web, diseño páginas web, ecommerce, tiendas online, desarrollo Laravel, branding digital, automatización marketing, inteligencia artificial negocios, consultoría SEO, diseño UX/UI, analítica web, copywriting, redes sociales, Google Ads')
@section('meta_image', asset('img/logo.png'))

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Nuestros Servicios</h2>
                        <div class="breadcrumb__links">
                            <a href="{{url('/')}}">Inicio</a>
                            <span>Servicios</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Services Section Begin -->
    <section class="services-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img loading="lazy" src="img/icons/icons8-software-50.png" alt="Icono Desarrollo Software">
                        </div>
                        <h4>Desarrollo Software</h4>
                        <p>Somos especialistas en el desarrollo de aplicaciones móviles, web apps y software a la medida, diseñados para superar tus desafíos con precisión. Integramos inteligencia artificial para automatizar procesos, analizar datos en tiempo real y ofrecer experiencias personalizadas que impulsan tu negocio. Desde chatbots predictivos hasta sistemas optimizados con machine learning, transformamos tus ideas en soluciones inteligentes y escalables.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img loading="lazy" src="img/icons/icons8-objetivo-50.png" alt="Icono Marketing Digital">
                        </div>
                        <h4>Marketing Digital</h4>
                        <p>Creamos estrategias personalizadas impulsadas por inteligencia artificial para maximizar tu visibilidad y potenciar tu marca. Utilizamos algoritmos predictivos para optimizar tus campañas, análisis de datos en tiempo real para tomar decisiones inteligentes y herramientas de automatización que multiplican tu alcance. Nos encargamos de todo: desde la gestión de redes sociales con chatbots conversacionales hasta la producción de comerciales con tecnología de vanguardia.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img loading="lazy" src="img/icons/icons8-consulta-50.png" alt="Icono Consultoría">
                        </div>
                        <h4>Consultoría</h4>
                        <p>Con más de 15 años de experiencia ayudando a empresas nacionales e internacionales, ofrecemos consultoría tecnológica y financiera con el poder de la inteligencia artificial. Usamos tecnología avanzada para automatizar tareas repetitivas, prever tendencias del mercado y tomar decisiones más rápidas y precisas, todo diseñado para hacer crecer tu negocio de manera inteligente.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img loading="lazy" src="img/icons/icons8-3d-50.png" alt="3D renders">
                        </div>
                        <h4>Modelado 3D</h4>
                        <p>Nos especializamos en la creación de renders, recorridos virtuales e infoarquitectura para proyectos residenciales, corporativos, oficinas, áreas comerciales, espacios recreativos y presentaciones de productos.</p>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img loading="lazy" src="img/icons/si-4.png" alt="Icono branding">
                        </div>
                        <h4>Branding y Diseño Corporativo</h4>
                        <p>Desarrollamos la identidad visual de tu marca con diseños profesionales que transmiten tus valores y te diferencian de la competencia.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img loading="lazy" src="img/icons/si-4.png" alt="Icono automatización">
                        </div>
                        <h4>Automatización de Procesos</h4>
                        <p>Implementamos soluciones de software para automatizar tus operaciones empresariales, ahorrando tiempo y reduciendo errores en tus procesos.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto sp__callto">
        <div class="container">
            <div class="callto__services spad set-bg" data-setbg="img/calltos-bg.jpg">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="callto__text">
                            <h2>VANGUARDIA</h2>
                            <p>En Uniblock combinamos tecnología, creatividad y estrategia para ofrecerte soluciones digitales que realmente generan resultados</p>
                            <a href="{{url('/contact')}}">Contacta con nuestros expertos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->




    <!-- Uniblock Plans Section Begin -->
    {{-- @include('front.component.uniblock-plans-section') --}}
    <!-- Uniblock Plans Section Begin -->


       <!-- Logo Begin -->
       <div class="logo spad">
        <div class="container">
            <div class="logo__carousel owl-carousel">
                <a href="#" class="logo__item"><img loading="lazy" src="img/logo/logo-1.png" alt="Logo cliente 1"></a>
                <a href="#" class="logo__item"><img loading="lazy" src="img/logo/logo-2.png" alt="Logo cliente 2"></a>
                <a href="#" class="logo__item"><img loading="lazy" src="img/logo/logo-3.png" alt="Logo cliente 3"></a>
                <a href="#" class="logo__item"><img loading="lazy" src="img/logo/logo-4.png" alt="Logo cliente 4"></a>
                <a href="#" class="logo__item"><img loading="lazy" src="img/logo/logo-5.png" alt="Logo cliente 5"></a>
                <a href="#" class="logo__item"><img loading="lazy" src="img/logo/logo-6.png" alt="Logo cliente 6"></a>
            </div>
        </div>
    </div>
    <!-- Logo End -->

@endsection
