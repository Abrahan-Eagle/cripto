<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-footer">
                <div class="form-group">
                    <label for="title">Nombre de la categoría</label>
                    <input type="text" class="form-control" name="title" id="title"
                           placeholder="Nombre de la categoría"
                           value="{{ old('title', $category->title ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label for="slug">URL Amigable (Slug)</label>
                    @if(isset($category) && $category->slug)
                        <input type="text" class="form-control" name="slug" id="slug"
                               value="{{ old('slug', $category->slug) }}" readonly>
                        <input type="hidden" name="current_slug" value="{{ $category->slug }}">
                    @else
                        <input type="text" class="form-control" name="slug" id="slug"
                               value="{{ old('slug') }}" readonly>
                    @endif
                    @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">Descripción</label>
                    <textarea class="form-control w-100" name="content" id="content"
                              cols="30" rows="5" placeholder="Descripción">{{ old('content', $category->content ?? '') }}</textarea>
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

        // Generar slug al escribir (solo si no está bloqueado)
        if (titleInput && slugInput) {
            titleInput.addEventListener('input', function() {
                if (!slugLocked) {
                    slugInput.value = generateSlug(this.value);
                }
            });

            // Generar slug inicial si hay valor pero no slug
            if (titleInput.value && !slugInput.value) {
                slugInput.value = generateSlug(titleInput.value);
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


    });
    </script>
