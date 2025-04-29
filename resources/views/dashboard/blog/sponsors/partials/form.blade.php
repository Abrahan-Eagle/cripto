<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-footer">
                <div class="form-group">
                    <label for="name">Nombre del patrocinante</label>
                    <input type="text" class="form-control" name="name" id="name"
                           placeholder="Nombre del patrocinante"
                           value="{{ old('name', $sponsor->name ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label for="slug">URL Amigable (Slug)</label>
                    @if(isset($sponsor) && $sponsor->slug)
                        <input type="text" class="form-control" name="slug" id="slug"
                               value="{{ old('slug', $sponsor->slug) }}" readonly>
                        <input type="hidden" name="current_slug" value="{{ $sponsor->slug }}">
                    @else
                        <input type="text" class="form-control" name="slug" id="slug"
                               value="{{ old('slug') }}" readonly>
                    @endif
                    @error('slug')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">Descripción del patrocinante</label>
                    <textarea class="form-control w-100" name="content" id="content"
                              cols="30" rows="2" placeholder="Descripción del patrocinante">{{ old('content', $sponsor->content ?? '') }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="img">IMAGEN</label>
                        @if(isset($sponsor) && $sponsor->img)
                            <div class="mb-2">
                                <img loading="lazy" src="/images/user/sponsor/{{ $sponsor->img }}"
                                     style="filter: grayscale(0%); width: 30%!important;"
                                     alt="{{ $sponsor->name }}">
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <label>ESTADO</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="btn btn-secondary">
                            <svg class="c-icon">
                                <use xlink:href="{{ asset('icons/sprites/free.svg#cil-folder-open') }}"></use>
                            </svg>
                            <input type="file" style="display: none;" name="img" id="img" accept="image/*">
                        </label>
                        @error('img')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="statusx" id="status_published"
                                   value="PUBLISHED" {{ old('statusx', $sponsor->statusx ?? 'PUBLISHED') == 'PUBLISHED' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_published">Publicado</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="statusx" id="status_draft"
                                   value="DRAFT" {{ old('statusx', $sponsor->statusx ?? '') == 'DRAFT' ? 'checked' : '' }}>
                            <label class="form-check-label" for="status_draft">Borrador</label>
                        </div>
                        @error('statusx')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const nameInput = document.getElementById('name');
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
        if (nameInput && slugInput) {
            nameInput.addEventListener('input', function() {
                if (!slugLocked) {
                    slugInput.value = generateSlug(this.value);
                }
            });

            // Generar slug inicial si hay valor pero no slug
            if (nameInput.value && !slugInput.value) {
                slugInput.value = generateSlug(nameInput.value);
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
