@extends('welcome')
@section('title','Uniblock | Agencia de Desarrollo de Software y Marketing Digital [2024]')

@section('meta_title', 'Agencia de Marketing Digital y Desarrollo Web - Uniblock')
@section('meta_description', 'Uniblock es una agencia líder en marketing digital y desarrollo web especializada en SEO, redes sociales y software personalizado. Transforma tu negocio con nuestras estrategias digitales efectivas.')
@section('meta_keywords', 'agencia marketing digital, desarrollo software, SEO profesional, posicionamiento web, publicidad digital, redes sociales, software personalizado, desarrollo web Laravel, tiendas online, transformación digital, branding digital, inteligencia artificial, automatización empresarial, consultoría SEO, diseño UX/UI, link building, analítica web, copywriting persuasivo')
@section('meta_image', asset('img/logo.png'))

@section('content')

    <!-- Migas de Pan -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Sobre Nosotros</h2>
                        <div class="breadcrumb__links">
                            <a href="{{url('/')}}">Inicio</a>
                            <span>Nosotros</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Migas de Pan -->

    <!-- Sección Sobre Nosotros -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about__pic__item about__pic__item--large set-bg"
                                    data-setbg="img/about/robot-uniblockweb-tecnologia-programacion-inteligencia-artificial.png" alt="Equipo de Uniblock trabajando"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="img/about/uniblock-negocio.png" alt="Reunión de estrategia digital"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="img/about/uniblock-people.png" alt="Desarrollo de proyectos tecnológicos"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="about__pic__item about__pic__item set-bg" data-setbg="img/AIBLOCK_03.png" style="max-width: 100%;" alt="Equipo de Uniblock trabajando"></div>

                            </div> --}}


                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="about__pic__item set-bg"
                                     data-setbg="img/AIBLOCK_03.png"
                                     style="background-size: cover; background-position: center; width: 100%; height: 0; padding-bottom: 40.25%; /* Relación 16:9 (ajústala según necesidad) */">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>Uniblock</span>
                            <h2>¿Quiénes somos?</h2>
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon">
                                        <img loading="lazy" src="img/icons/si-3.png" alt="Icono desarrollo web">
                                    </div>
                                    <h4>Desarrollo de Software</h4>
                                    <p>Soluciones tecnológicas personalizadas para impulsar tu negocio digital.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon">
                                        <img loading="lazy" src="img/icons/si-4.png" alt="Icono marketing digital">
                                    </div>
                                    <h4>Estrategias Digitales</h4>
                                    <p>Planes de marketing online para aumentar tu visibilidad y conversiones.</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="about__text__desc">
                            <p>
                                Uniblock es una empresa con más de 15 años de experiencia en desarrollo de software, consultoría, marketing digital y modelado de arquitectura 3D. Hoy, combinamos esa trayectoria con el poder de la inteligencia artificial para ofrecer soluciones más rápidas, inteligentes y adaptadas a los desafíos del mundo actual.
                            </p>

                            <p>
                                Contamos con un equipo de amplia trayectoria, cuyo conocimiento nos permite brindar soluciones precisas y oportunas, potenciadas por IA. Desde sistemas que aprenden de los datos para optimizar procesos, hasta herramientas predictivas que anticipan tendencias, diseñamos tecnología que trabaja para ti.

                            </p>

                            <p>
                                Más que un servicio, ofrecemos dedicación a cada proyecto, sin importar su tamaño. Lo abordamos con pasión y entrega, porque creemos que el éxito reside en los detalles y en la capacidad de innovar. Nos inspira materializar los sueños de quienes confían en nosotros, y con la IA, lo hacemos de manera más eficiente y creativa.
                            </p>

                            <p>
                                Vemos en cada idea esa chispa que impulsa nuestro trabajo. Por eso, hemos crecido junto a nuestros clientes, aprendiendo de su visión y colaborando para convertirla en realidad con herramientas que marcan la diferencia.
                            </p>

                            <p>
                                Nuestra meta es clara: ser el motor que impulse tu crecimiento y éxito. Porque cuando combinamos experiencia humana con tecnología inteligente, los resultados no tienen límites.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Sección Sobre Nosotros -->

     <!-- Team Section Begin -->
     @include('front.component.team-section')
     <!-- Team Section End -->

    <!-- Sección Testimonios -->
    <section class="testimonial spad set-bg" style="background:#100028 !important;" data-setbg="img/testimonial-bgz.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Palabras de Nuestro Equipo</span>
                        <h2>El equipo comparte su vision.</h2>
                    </div>
                </div>
            </div>
            @if ($author->isNotEmpty())
            <div class="row">
                <div class="testimonial__slider owl-carousel">



                    @foreach($author as $authors)
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p> {!! $authors->content !!}</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    {{-- <img loading="lazy" src="img/testimonial/ta-1.jpg" alt="Testimonio Carlos Méndez"> --}}

                                    <img loading="lazy" src="/images/user/author/{{ $authors->img }}" alt="{{ $authors->name }}">


                                </div>
                                <div class="testimonial__author__text">
                                    {{-- <h5>Carlos Méndez</h5> --}}
                                    <h5>{!! $authors->name !!}</h5>
                                    {{-- <span>Director de Marketing</span> --}}
                                </div>
                            </div>
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
    <!-- Fin Sección Testimonios -->




      {{-- <!-- Contadores -->
      <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img loading="lazy" src="img/icons/ci-1.png" alt="Icono proyectos completados">
                                <h2 class="counter_num">150</h2>
                                <p>Proyectos Completados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img loading="lazy" src="img/icons/ci-2.png" alt="Icono clientes satisfechos">
                                <h2 class="counter_num">85</h2>
                                <p>Clientes Satisfechos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img loading="lazy" src="img/icons/ci-3.png" alt="Icono proyectos activos">
                                <h2 class="counter_num">30</h2>
                                <p>Proyectos en Curso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img loading="lazy" src="img/icons/ci-4.png" alt="Icono especialistas">
                                <h2 class="counter_num">12</h2>
                                <p>Expertos Digitales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Fin Contadores -->


        <!-- Team Section Begin -->
        @include('front.component.callto-section')
        <!-- Team Section End -->

@endsection
