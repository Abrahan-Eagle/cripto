@extends('layouts.app')
@section('title','Editar etiqueta')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body p-4">
                <h1>Editar</h1>
                <p class="text-muted">Modificar Etiqueta</p>
            </div>
            <form method="POST" action="{{ route('tags.update', $tag->id) }}">
                @csrf
                @method('POST')
                <input type="hidden" name="level" value="blog">
                @include('dashboard.blog.tags.partials.form')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-footer">
                                <button class="btn btn-block btn-facebook" type="submit">
                                    <span>Actualizar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
