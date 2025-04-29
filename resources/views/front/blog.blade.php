@extends('welcome')
@section('title', 'Uniblock | Blog sobre Desarrollo de Software y Marketing Digital [2024]')

@section('meta_title', 'Blog de Marketing Digital y Desarrollo Web - Uniblock')
@section('meta_description', 'Descubre las últimas tendencias en marketing digital y desarrollo de software. Consejos expertos en SEO, redes sociales, UX/UI y transformación digital para impulsar tu negocio.')
@section('meta_keywords', 'blog marketing digital, desarrollo software, tendencias SEO, posicionamiento web, redes sociales empresariales, diseño UX/UI, transformación digital, automatización empresarial, casos de éxito digital, estrategias ecommerce')
@section('meta_image', asset('img/logo.png'))

@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Blog Digital</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('/') }}">Inicio</a>
                        <span>Nuestro Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            @if ($posts->isNotEmpty())
                @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <h4><a href="{{ route('blog.post', $post->slug) }}" class="enlace-seo">{{ $post->title }}</a></h4>
                        <ul class="meta-post">
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
            @else
                <div class="col-12 text-center">
                    <h3 class="no-content" style="color: white">Actualmente no hay publicaciones disponibles</h3>
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col-lg-12">
                <nav class="pagination__option blog__pagi" aria-label="Paginación de artículos">

                    @if ($posts->hasPages())
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination__option">
                                {{-- Enlace "Anterior" --}}
                                @if ($posts->onFirstPage())
                                    <span class="arrow__pagination left__arrow disabled"><span class="arrow_left"></span> Prev</span>
                                @else
                                    <a href="{{ $posts->previousPageUrl() }}" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                                @endif

                                {{-- Números de página --}}
                                @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                    @if ($page == $posts->currentPage())
                                        <span class="number__pagination active">{{ $page }}</span>
                                    @else
                                        <a href="{{ $url }}" class="number__pagination">{{ $page }}</a>
                                    @endif
                                @endforeach

                                {{-- Enlace "Siguiente" --}}
                                @if ($posts->hasMorePages())
                                    <a href="{{ $posts->nextPageUrl() }}" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                                @else
                                    <span class="arrow__pagination right__arrow disabled">Next <span class="arrow_right"></span></span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif


    </nav>
</div>
</div>


    </div>
</section>
<!-- Blog Section End -->

@endsection
