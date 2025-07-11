@extends('layouts.app')
@section('title','Editar patrocinante')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body p-4">
                <h2 class="text-muted">Editar Patrocinantes</h2>
            </div>
            <form method="POST" action="{{ route('sponsors.update', $sponsor->id) }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                @include('dashboard.blog.sponsors.partials.form')
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
