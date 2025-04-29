@extends('layouts.app')
@section('title','Crear autor')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body p-4">
                <h1>Registrar</h1>
                <p class="text-muted">Crear Autor</p>
            </div>
            <form action="{{ route('authors.store') }}" method="post" enctype="multipart/form-data" id="author-form">
                @csrf
                <input type="hidden" name="level" value="blog">

                @include('dashboard.blog.authors.partials.form')

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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');

    if (nameInput && slugInput) {
        // Función mejorada para generar slugs
        const generateSlug = (text) => {
            return text.toLowerCase()
                .replace(/á/gi, 'a')
                .replace(/é/gi, 'e')
                .replace(/í/gi, 'i')
                .replace(/ó/gi, 'o')
                .replace(/ú/gi, 'u')
                .replace(/ñ/gi, 'n')
                .replace(/\s+/g, '-')
                .replace(/[^\w\-]+/g, '')
                .replace(/\-\-+/g, '-')
                .replace(/^-+/, '')
                .replace(/-+$/, '');
        };

        // Generar slug al escribir
        nameInput.addEventListener('input', function() {
            slugInput.value = generateSlug(this.value);
        });

        // Generar slug si ya hay valor al cargar la página
        if (nameInput.value) {
            slugInput.value = generateSlug(nameInput.value);
        }
    }

    // Validación de imagen
    const imgInput = document.getElementById('img');
    if (imgInput) {
        imgInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const validTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    alert('Por favor, sube una imagen válida (JPEG, PNG o GIF)');
                    this.value = '';
                }
            }
        });
    }
});
</script>

@endsection
