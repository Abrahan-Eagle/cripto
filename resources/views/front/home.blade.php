@extends('welcome')
@section('title','Uniblock | Desarrollo Software + Marketing Digital [2024]')

@section('meta_title', 'Agencia de Marketing Digital y Desarrollo Web - Uniblock')
@section('meta_description', 'Uniblock es una agencia de marketing digital y desarrollo web especializada en SEO, redes sociales y software a medida. ¡Impulsa tu negocio con estrategias digitales efectivas!')
@section('meta_keywords', 'agencia de marketing digital, desarrollo de software, SEO, posicionamiento web, SEM, redes sociales, software a medida, desarrollo web en Laravel, ecommerce, transformación digital, branding digital, inteligencia artificial, automatización empresarial, consultoría SEO, publicidad digital, UX/UI, link building, analítica web, copywriting')
@section('meta_image', asset('img/logo.png'))

@section('content')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" style="background:#100028 !important;" data-setbg="img/hero/hero-x1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Expertos en</span>
                                <h2>Desarrollo de Software</h2>
                                <a href="{{ url('/about') }}" class="primary-btn">Ver más sobre nosotros</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" style="background:#100028 !important;" data-setbg="img/hero/hero-x1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Expertos en</span>
                                <h2>Marketing Digital</h2>
                                 <a href="{{ url('/about') }}" class="primary-btn">Ver más sobre nosotros</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" style="background:#100028 !important;" data-setbg="img/hero/hero-x1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>Expertos en</span>
                                <h2>Consultoría</h2>
                                 <a href="{{ url('/about') }}" class="primary-btn">Ver más sobre nosotros</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span>Nuestros servicios</span>
                            <h2>¿En qué somos buenos?</h2>
                        </div>
                        <p>Queremos que sepas que, al contratarnos, estás eligiendo una empresa con un equipo multidisciplinario con más de 15 años de experiencia en cada una de las áreas que ofrecemos.</p>
                        <a href="{{ url('/services') }}" class="primary-btn">Ver todos los servicios</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img loading="lazy" src="img/icons/icons8-software-50.png" alt="Icono Desarrollo Software">
                                </div>
                                <h4>Desarrollo Software</h4>
                                <p>Somos especialistas en el desarrollo de aplicaciones móviles, web apps y software a la medida, diseñados para superar tus desafíos con precisión. Integramos inteligencia artificial para automatizar procesos, analizar datos en tiempo real y ofrecer experiencias personalizadas que impulsan tu negocio.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img loading="lazy" src="img/icons/icons8-objetivo-50.png" alt="Icono Marketing Digital">
                                </div>
                                <h4>Marketing Digital</h4>
                                <p>Creamos estrategias personalizadas impulsadas por inteligencia artificial para maximizar tu visibilidad y potenciar tu marca. Utilizamos algoritmos predictivos para optimizar tus campañas, análisis de datos en tiempo real para tomar decisiones inteligentes y herramientas de automatización.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <img loading="lazy" src="img/icons/icons8-consulta-50.png" alt="Icono Consultoría">
                                </div>
                                <h4>Consultoría</h4>
                                <p>Gracias a nuestra trayectoria de más de 15 años trabajando con empresas nacionales e internacionales, ofrecemos servicios de consultoría tecnológica y financiera potenciados por inteligencia artificial.</p>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    @if ($projects->isNotEmpty())
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            @php
                $layoutPattern = [
                    'wide__item',
                    'small__item',
                    'small__item',
                    'large__item',
                    'small__item',
                    'small__item',
                    'wide__item'
                ];
                $position = 0;
            @endphp

            @foreach ($projects as $project)
                @php
                    $currentClass = $layoutPattern[$position % count($layoutPattern)];
                    $position++;
                @endphp
                <div class="work__item {{ $currentClass }} set-bg" data-setbg="img/portafolio/{{ $project->img }}" style="
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;


    " alt="{{ $post->title ?? 'Imagen del portafolio' }}">
                    <div class="work__item__hover">
                        <h4 class="text-white">{{ $project->title }}</h4>
                        <ul>
                            <li>{{ $project->category->name }}</li>
                            @if($project->tag)
                                <li>{{ $project->tag->title }}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="no-content" style="color: white">Actualmente no hay publicaciones disponibles</h3>
                </div>
            </div>
        @endif
        </div>
    </section>
    <!-- Work Section End -->


    <!-- Uniblock Plans Section Begin -->
    @include('front.component.uniblock-plans-section')
    <!-- Uniblock Plans Section Begin -->




    <!-- Team Section Begin -->
    @include('front.component.team-section')
    <!-- Team Section End -->

    <!-- Latest Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Nuestro Blog</span>
                        <h2>Actualizaciones Recientes</h2>
                    </div>
                </div>
            </div>

            @if ($posts->isNotEmpty())
            <div class="row">
                <div class="latest__slider owl-carousel">
                    @foreach ($posts as $post)
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4><a href="{{ route('blog.post', $post->slug) }}" class="enlace-seo">{{ $post->title }}</a></h4>
                            <ul>
                                <li><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($post->created_at)->locale('es')->translatedFormat('d M, Y') }}</li>
                                @if($post->comments_count > 0)
                                <li><i class="fa fa-comments"></i> {{ $post->comments_count }} Comentarios</li>
                                @endif
                            </ul>
                            <p class="resumen-post">{!! Str::limit(strip_tags($post->content), 150) !!}</p>
                            <a href="{{ route('blog.post', $post->slug) }}" class="btn-leermas" aria-label="Leer artículo completo: {{ $post->title }}">
                                Leer más <span class="arrow_right"></span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <div class="col-12 text-center">
                <h3 class="no-content" style="color: white">Actualmente no hay publicaciones disponibles</h3>
            </div>
            @endif
        </div>
    </section>
    <!-- Latest Section End -->

    <!-- Team Section Begin -->
    @include('front.component.callto-section')
    <!-- Team Section End -->

@endsection


