@guest
@else

<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
  <div class="c-sidebar-brand d-lg-down-none">
    <a href="{{ url('/') }}">
      <svg class="c-sidebar-brand-full" width="250" height="46" alt="UniblockWeb Logo">
        <a href="{{ url('/') }}">
          <text x="17" y="30" fill="#055e94" style="font-size: 20px">UniblockWeb</text>
      </svg>

      <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="UniblockWeb Logo">
        <text x="0" y="30" fill="#055e94" style="font-size: 20px">UniblockWeb</text>
      </svg>
    </a>
  </div>

  <ul class="c-sidebar-nav" data-drodpown-accordion="true">
    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{url('/dashboard')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{asset('icons/sprites/free.svg#cil-bank')}}"></use>
        </svg>Dashboard
        <!--<span class="badge badge-info">HACKER NEW</span>--></a></li>

    <li class="c-sidebar-nav-title">Menu</li>

    <li class="c-sidebar-nav-dropdown">
        <a class="c-sidebar-nav-dropdown-toggle" href="#">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('icons/sprites/free.svg#cil-people')}}"></use>
          </svg> Patrocinantes y Autores
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
          <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('authors.index') }}">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="{{asset('icons/sprites/free.svg#cil-user')}}"></use>
              </svg> Autor
            </a>
          </li>
          <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('sponsors.index') }}">
              <svg class="c-sidebar-nav-icon">
                <use xlink:href="{{asset('icons/sprites/free.svg#cil-briefcase')}}"></use>
              </svg> Patrocinante
            </a>
          </li>
        </ul>
      </li>





    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
      <svg class="c-sidebar-nav-icon">
        <use xlink:href="{{asset('icons/sprites/free.svg#cil-task')}}"></use>
      </svg>Proyectos</a>
      <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('categories-project.index', ['level' => 'project']) }}">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('icons/sprites/free.svg#cil-list')}}"></use>
          </svg> Categorias</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('tags-project.index', ['level' => 'project']) }}">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('icons/sprites/free.svg#cil-tag')}}"></use>
          </svg> Etiquetas</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('posts-project.index', ['level' => 'project']) }}">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('icons/sprites/free.svg#cil-description')}}"></use>
          </svg> Post</a></li>
      </ul>
    </li>

    <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
      <svg class="c-sidebar-nav-icon">
        <use xlink:href="{{asset('icons/sprites/free.svg#cil-book')}}"></use>
      </svg> Blog</a>
      <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('categories.index', ['level' => 'blog']) }}">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('icons/sprites/free.svg#cil-list')}}"></use>
          </svg> Categorias</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('tags.index', ['level' => 'blog']) }}">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('icons/sprites/free.svg#cil-tag')}}"></use>
          </svg> Etiquetas</a></li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('posts.index', ['level' => 'blog']) }}">
          <svg class="c-sidebar-nav-icon">
            <use xlink:href="{{asset('icons/sprites/free.svg#cil-description')}}"></use>
          </svg> Post</a></li>
      </ul>
    </li>
  </ul>

  <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
    data-class="c-sidebar-minimized"></button>
</div>

@endguest
