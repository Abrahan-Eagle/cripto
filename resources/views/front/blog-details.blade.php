@extends('welcome')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "$titleTag")
@section('content')

<!-- Blog Details Hero Begin -->
<section class="blog-hero spad set-bg" data-setbg="{{asset('img/breadcrumb-bg.jpg')}}">

    {{-- <section class="blog-hero spad set-bg" data-setbg="{{asset('img/blog/blog-hero.jpg')}}"> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-8 col-xl-12 col-xxl-6"> <!-- Ajuste progresivo de columnas -->
                <div class="blog__hero__text text-center">
                    <h1 class="display-6 display-sm-5 display-md-4 display-lg-3 display-xl-2 text-white">{!! $post->title !!}</h1>
                    <ul class="d-flex flex-wrap justify-content-center gap-2 gap-sm-3"> <!-- Espaciado responsive -->
                        <li class="px-2 px-sm-3">por <span>Admin</span></li>
                        <li class="px-2 px-sm-3">{{ date('d M Y', strtotime($post->created_at)) }}</li>
                        <li class="px-2 px-sm-3">{{ count($comment) }} Comentarios</li>
                        <li class="px-2 px-sm-3">{{ $post->views }} Visualizaciones</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Hero End -->

<!-- Blog Details Section Begin -->
<div class="blog-details spad" style="background: #ffff !important;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-11 col-md-10 col-lg-9 col-xl-12 col-xxl-7"> <!-- Escalado progresivo -->
                <div class="blog__details__content">

                    <!-- Contenido principal -->
                    <div class="blog__details__text">
                        <h2 class="mb-3 text-bg-dark fs-4 fs-sm-3 fs-md-2">{!! substr($post['title'], 0, 92) !!}</h2>
                        <h4 class="mb-3 text-secondary fs-5 fs-sm-5 fs-md-4"><b>{!! $post->excerpt !!}</b></h4>
                    </div>

                    <!-- Sección multimedia -->
                    @if($post->url_video)
                        <div class="mb-4 ratio ratio-16x9">
                            <iframe class="rounded shadow"
                                    src="{{ $post->url_video }}"
                                    allowfullscreen
                                    loading="lazy"
                                    title="Video de {{ $post->title }}"></iframe>
                        </div>
                    @else
                        <div class="mb-4">
                            <img loading="lazy" src="/images/front/blog/{{ $post->img }}"
                                alt="{{ $post->title }}"
                                class="img-fluid rounded shadow"
                                style="width: 100%; height: auto; max-height: 70vh; object-fit: cover;">
                        </div>
                    @endif

                    <!-- Contenido del post -->
                    <div class="blog__details__text">
                        <div class="content-wrapper" style="font-size: 1.1rem; line-height: 1.7;">
                            {!! $post->content !!}
                        </div>
                    </div>

                    {{-- <!-- Interacción -->
                    <div class="interaction-section my-5 py-3 border-top border-bottom">
                        <div class="d-flex flex-column flex-sm-row justify-content-evenly align-items-center gap-3">
                            <a href="{{ route('blog.like', ['slug' => $post->slug]) }}"
                               class="btn-interaction btn btn-lg btn-outline-primary px-4 py-2 w-100 w-sm-auto">
                                <span class="icon-thumbs-up fs-5"></span>
                                <span class="ms-2">{{ $like->isNotEmpty() ? $like->sum('like') : 0 }}</span>
                            </a>
                            <a href="{{ route('blog.dislike', ['slug' => $post->slug]) }}"
                               class="btn-interaction btn btn-lg btn-outline-primary px-4 py-2 w-100 w-sm-auto">
                                <span class="icon-thumbs-down fs-5"></span>
                                <span class="ms-2">{{ $like->isNotEmpty() ? $like->sum('dislike') : 0 }}</span>
                            </a>
                        </div>
                    </div> --}}


                                            <div class="post-metadata blog__details__tags mb-5">

                                                <!-- Categoría - Versión individual -->
                                                <div class="category-section mb-4 p-3 bg-light rounded">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-folder-open text-primary fs-5 me-3"></i>
                                                        <strong class="me-2">Categoría:</strong>
                                                        <a href="{{ route('blog.category', ['slug' => $post->category->slug]) }}"
                                                           class="text-decoration-none text-dark fw-medium ml-3">
                                                            {{ $post->category->title }}
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="category-section mb-4 p-3 bg-light rounded">
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-tags text-primary fs-5 me-3"></i>
                                                        <strong class="me-2">Etiquetas:</strong>
                                                        @foreach ($post->tags as $tag)
                                                            <a href="{{ route('blog.tag', ['slug' => $tag->slug]) }}"
                                                               class="text-decoration-none text-dark fw-medium ms-3">
                                                                {{ $tag->title }}
                                                            </a>
                                                            @if(!$loop->last)  @endif
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>

                    <!-- Autor -->
                    @foreach($author as $authors)
                    <div class="author-card mb-5">
                        <div class="row g-4 align-items-center">
                            <div class="col-12 col-md-auto text-center">
                                <img loading="lazy" src="/images/user/author/{{ $authors->img }}"
                                     alt="{{ $authors->name }}"
                                     class="img-fluid rounded-circle shadow"
                                     style="width: 150px; height: 150px; object-fit: cover;">
                            </div>
                            <div class="col-12 col-md">
                                <div class="author-info">
                                    <h3 class="mb-3 fw-bold text-primary">{!! $authors->name !!}</h3>
                                    <div class="author-bio text-muted fs-6">

                                        <style>
                                            p {
                                              color: #000; /* Negro */
                                            }
                                            h2 {
                                              color: #100028; /* Tono púrpura */
                                            }
                                          </style>



                                        {!! $authors->content !!}
                                    </div>
                                    @if($authors->social_links)
                                    <div class="social-links mt-4 d-flex gap-3">
                                        @foreach($authors->social_links as $network => $link)
                                        <a href="{{ $link }}"
                                           class="btn btn-sm btn-outline-dark rounded-circle"
                                           style="width: 40px; height: 40px;"
                                           target="_blank"
                                           rel="noopener">
                                            <i class="fab fa-{{ $network }}"></i>
                                        </a>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Comentarios -->
                    <div class="comments-section mt-5">
                        <div class="card border-0 shadow">
                            <div class="card-body p-4">
                                <h4 class="mb-4 fw-bold">{{ count($comment) }} Comentarios</h4>

                                @if($comment->isNotEmpty())
                                <div class="comment-list">
                                    @foreach($comment as $comments)
                                    <div class="comment-item py-3 border-bottom">
                                        <div class="row g-3">
                                            <div class="col-auto">
                                                <img loading="lazy" src="/images/user/{{ $comments->img }}"
                                                     alt="{{ $comments->name }}"
                                                     class="rounded-circle"
                                                     width="60"
                                                     height="60">
                                            </div>
                                            <div class="col">
                                                <div class="comment-content">
                                                    <h6 class="mb-1 fw-semibold">{{ $comments->name }}</h6>
                                                    <div class="meta text-muted small mb-2">
                                                        {{ date('d M Y', strtotime($comments->created_at)) }}
                                                    </div>
                                                    <p class="mb-2">{!! $comments->comment !!}</p>
                                                    <button type="button"
                                                            class="btn btn-link btn-sm p-0 text-decoration-none"
                                                            data-toggle="modal"
                                                            data-target="#exampleModal"
                                                            data-whatever="{{ $comments->id }}">
                                                        Responder
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @else
                                <div class="alert alert-info mb-0">No hay comentarios aún. ¡Sé el primero en comentar!</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Formulario de comentarios -->
                    <div class="comment-form mt-5">
                        <div class="card border-0 shadow">
                            <div class="card-body p-4">
                                <h4 class="mb-4 fw-bold">Deja un comentario</h4>
                                <form action="{{ route('comment.submit', $post->id) }}" method="post">
                                    @csrf
                                    <div class="row g-3 mb-4">
                                        <div class="col-12 col-md-4">
                                            <input type="text"
                                                   name="name"
                                                   placeholder="Nombre *"
                                                   class="form-control form-control-lg"
                                                   required>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="email"
                                                   name="email"
                                                   placeholder="Email *"
                                                   class="form-control form-control-lg"
                                                   required>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="url"
                                                   name="website"
                                                   placeholder="Sitio Web"
                                                   class="form-control form-control-lg">
                                        </div>
                                    </div>
                                    <textarea class="form-control form-control-lg mb-4"
                                              name="comment"
                                              rows="5"
                                              placeholder="Comentario *"
                                              style="min-height: 150px;"
                                              required></textarea>
                                    <div class="d-grid">


                                           <!-- Widget de reCAPTCHA -->
                                        <div class=" mb-4 g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                                        @error('g-recaptcha-response')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror


                                        <button type="submit"
                                                class="btn btn-primary btn-lg">
                                            Publicar Comentario
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Posts relacionados -->
                    <div class="related-posts mt-5">
                        <h4 class="mb-4 fw-bold">Artículos Recientes</h4>
                        <div class="row g-4">
                            @foreach($recentpost as $recentposts)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                                    <a href="{{ route('blog.post', ['slug' => $recentposts->slug]) }}"
                                       class="text-decoration-none text-dark">
                                        <div class="card-img-top overflow-hidden" style="height: 200px;">
                                            <img loading="lazy" src="/images/front/blog/{{ $recentposts->img }}"
                                                 alt="{{ $recentposts->title }}"
                                                 class="img-fluid w-100 h-100 object-fit-cover"
                                                 loading="lazy">
                                        </div>
                                        <div class="card-body">
                                            <h3 class="h5 card-title fw-semibold">{{ Str::limit($recentposts->title, 50) }}</h3>
                                            <small class="text-muted">{{ date('d M Y', strtotime($recentposts->created_at)) }}</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Details Section End -->

@endsection
