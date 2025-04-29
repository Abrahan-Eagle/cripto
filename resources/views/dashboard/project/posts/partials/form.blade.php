<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-footer">
                <input class="form-control" name="user_id" id="user_id" type="hidden" value="{{ auth()->user()->id }}">

                <!-- Video Toggle (añadido) -->
                <div class="form-group">
                    <div class="custom-control custom-switch float-right">
                        <input type="checkbox" class="custom-control-input" id="videoToggle" name="add_video"
                            {{ isset($post) && $post->url_video ? 'checked' : '' }}>
                        <label class="custom-control-label" for="videoToggle">Agregar Video</label>
                    </div>
                </div>

                <!-- Video URL Field (añadido) -->
                <div id="videoUrlField" style="display: {{ isset($post) && $post->url_video ? 'block' : 'none' }};">
                    <div class="form-group">
                        <label for="url_video">URL Video Youtube</label>
                        <input type="text" class="form-control" name="url_video" id="url_video"
                               placeholder="https://www.youtube.com/embed/aq1IkYffAx0"
                               value="{{ old('url_video', $post->url_video ?? '') }}">
                        @error('url_video')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <label for="title">Nombre del autor</label>
                    <input type="text" class="form-control" name="title" id="title"
                           placeholder="Nombre del autor"
                           value="{{ old('title', $post->title ?? '') }}" required>
                           @error('title')
                           <div class="text-danger">{{ $message }}</div>
                       @enderror
                </div>

                <div class="form-group">
                    <label for="slug">URL Amigable (Slug)</label>
                    @if(isset($post) && $post->slug)
                        <div class="input-group">
                            <input type="text" class="form-control" name="slug" id="slug"
                                   value="{{ old('slug', $post->slug) }}" readonly>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="lock-slug">
                                    <i class="fas fa-lock"></i>
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="original_slug" value="{{ $post->slug }}">
                    @else
                        <input type="text" class="form-control" name="slug" id="slug"
                               value="{{ old('slug') }}" readonly>
                    @endif
                    @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Authors Dropdown -->
                <div class="form-group">
                    <label for="author_id">Autores</label>
                    <select class="form-control" id="author_id" name="author_id" required>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" {{ old('author_id', $post->author_id ?? '') == $author->id ? 'selected' : '' }}>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Categories Dropdown -->
                <div class="form-group">
                    <label for="category_id">Categorias</label>
                    <select class="form-control" id="category_id" name="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $post->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image and Status Row -->
                <div class="row">
                    <div class="col-sm-6">
                        <label for="img">IMAGEN</label>
                        @error('img')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label>ESTADO</label>
                        @error('statusx')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="btn btn-secondary">
                            <svg class="c-icon">
                                <use xlink:href="{{ asset('icons/sprites/free.svg#cil-folder-open') }}"></use>
                            </svg>
                            <input type="file" style="display: none;" name="img" id="img">
                        </label>
                        @if(isset($post) && $post->img)
                        {{ $post->img }}
                            <div class="mt-2">
                               <img loading="lazy" src="{{ asset('img/portafolio/' . $post->img) }}" alt="{{ $post->img }}" style="max-height: 100px; width: auto;">
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <label class="mr-3">
                            <input type="radio" name="statusx" value="PUBLISHED"
                                   {{ old('statusx', $post->statusx ?? 'DRAFT') == 'PUBLISHED' ? 'checked' : '' }}>
                            Publicado
                        </label>
                        <label>
                            <input type="radio" name="statusx" value="DRAFT"
                                   {{ old('statusx', $post->statusx ?? 'DRAFT') == 'DRAFT' ? 'checked' : '' }}>
                            Borrador
                        </label>
                    </div>
                </div>

                <!-- Tags Checkboxes -->
                <div class="form-group">
                    <label>Etiquetas</label><br>
                    @foreach ($tags as $tag)
                        <label class="mr-3">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                   {{ in_array($tag->id, old('tags', isset($post) ? $post->tags->pluck('id')->toArray() : [])) ? 'checked' : '' }}>
                            {{ $tag->title }}
                        </label>
                    @endforeach
                    @error('tags')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Excerpt Textarea -->
                <div class="form-group">
                    <label for="excerpt">EXTRACTO</label>
                    <textarea class="form-control w-100" name="excerpt" id="excerpt" cols="30" rows="2"
                              placeholder="Extracto">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
                    @error('excerpt')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Content Textarea -->
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea class="form-control" name="content" id="content">{{ old('content', $post->content ?? '') }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>




<script>

    document.addEventListener('DOMContentLoaded', function() {
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        const lockButton = document.getElementById('lock-slug');
        let slugLocked = false;

        // Función mejorada para generar slugs
        function string_to_slug(text) {
            return text.toString().toLowerCase()
                .replace(/á/gi, 'a')
                .replace(/é/gi, 'e')
                .replace(/í/gi, 'i')
                .replace(/ó/gi, 'o')
                .replace(/ú/gi, 'u')
                .replace(/ñ/gi, 'n')
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')        // Remove all non-word chars
                .replace(/\-\-+/g, '-')          // Replace multiple - with single -
                .replace(/^-+/, '')              // Trim - from start of text
                .replace(/-+$/, '');             // Trim - from end of text
        }

        // Generar slug al escribir
        if (titleInput && slugInput) {
            titleInput.addEventListener('keyup', function() {
                if (!slugLocked) {
                    slugInput.value = string_to_slug(titleInput.value);
                }
            });

            // Generar slug inicial si hay valor pero no slug (para edición)
            if (titleInput.value && !slugInput.value) {
                slugInput.value = string_to_slug(titleInput.value);
            }
        }

        // Bloquear/desbloquear slug en edición
        if (lockButton) {
            lockButton.addEventListener('click', function() {
                slugLocked = !slugLocked;
                slugInput.readOnly = slugLocked;
                this.innerHTML = slugLocked ? '<i class="fas fa-lock-open"></i>' : '<i class="fas fa-lock"></i>';
                this.classList.toggle('btn-outline-secondary');
                this.classList.toggle('btn-outline-success');
            });
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

                    // Mostrar vista previa
                    const preview = document.getElementById('img-preview');
                    if (preview && window.FileReader) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            preview.src = e.target.result;
                            preview.style.display = 'block';
                        };
                        reader.readAsDataURL(file);
                    }
                }
            });
        }
    });
</script>
