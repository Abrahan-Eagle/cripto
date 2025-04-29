@extends('layouts.app')
@section('title','Crear categoría')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body p-4">
                <h1>Registrar</h1>
                <p class="text-muted">Crear Categoría</p>
            </div>
            <form action="{{ route('categories.store') }}" method="post">
                @csrf
                <input type="hidden" name="level" value="blog">
                @include('dashboard.blog.categories.partials.form')
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-footer">
                                <button class="btn btn-block btn-facebook" type="submit">
                                    <span>Registrar</span>
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
