@extends('layouts.app')
@section('title','Editar autor')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body p-0">

                <p class="text-muted">Modificar Autor</p>
            </div>
            <form method="POST" action="{{ route('authors.update', $author->id) }}" enctype="multipart/form-data" id="author-form">
                @csrf
                @method('POST')
                <input type="hidden" name="level" value="blog">

                @include('dashboard.blog.authors.partials.form')

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
