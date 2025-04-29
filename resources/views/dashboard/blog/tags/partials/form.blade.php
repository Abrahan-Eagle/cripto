<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-footer">
                <div class="form-group">
                    <label for="title">Nombre de la etiqueta</label>
                    <input type="text" class="form-control" name="title" id="title"
                           placeholder="Nombre de la etiqueta"
                           value="{{ old('title', $tag->title ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label for="slug">URL Amigable (Slug)</label>
                    @if(isset($tag) && $tag->slug)
                        <input type="text" class="form-control" name="slug" id="slug"
                               value="{{ old('slug', $tag->slug) }}" readonly>
                        <input type="hidden" name="current_slug" value="{{ $tag->slug }}">
                    @else
                        <input type="text" class="form-control" name="slug" id="slug"
                               value="{{ old('slug') }}" readonly>
                    @endif
                    @error('slug')
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

    function generateSlug(text) {
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
    }

    if (titleInput && slugInput) {
        titleInput.addEventListener('input', function() {
            slugInput.value = generateSlug(this.value);
        });

        if (titleInput.value && !slugInput.value) {
            slugInput.value = generateSlug(titleInput.value);
        }
    }
});
</script>
