<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorStoreRequest;
use App\Http\Requests\AuthorUpdateRequest;
use App\Models\Author;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AuthorController extends Controller
{
    private $imageManager;

    public function __construct()
    {
        $this->middleware('auth');
        $this->imageManager = new ImageManager(new Driver());
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::orderBy('id', 'DESC')->paginate();
        return view('dashboard.blog.authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blog.authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorStoreRequest $request)
    {
        $data = $request->all();

        // Generar slug único
        $data['slug'] = $this->generateUniqueSlug($data['name']);

        $author = Author::create($data);

        if ($request->hasFile('img')) {
            $this->handleImageUpload($request, $author);
        }

        toastr()->success('Autor creado con éxito');
        return redirect()->route('authors.index')->with('info', 'Autor creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('dashboard.blog.authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('dashboard.blog.authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorUpdateRequest $request, $id)
    {
        $author = Author::findOrFail($id);
        $data = $request->all();

        // Solo actualizar slug si cambió el nombre
        if ($author->name !== $data['name']) {
            $data['slug'] = $this->generateUniqueSlug($data['name'], $author->id);
        } else {
            // Mantener el slug original
            $data['slug'] = $author->slug;
        }

        $author->update($data);

        if ($request->hasFile('img')) {
            // Eliminar imagen anterior si existe
            if ($author->img) {
                $this->deleteImage($author->img);
            }
            $this->handleImageUpload($request, $author);
        }

        toastr()->success('Autor actualizado con éxito');
        return redirect()->route('authors.index')->with('info', 'Autor actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $author = Author::findOrFail($id);

        // Eliminar imagen asociada
        if ($author->img) {
            $this->deleteImage($author->img);
        }

        $author->delete();

        DB::statement("ALTER TABLE `authors` AUTO_INCREMENT = 1;");
        return back()->with('info', 'Eliminado correctamente');
    }

    /**
     * Genera un slug único
     */
    private function generateUniqueSlug($name, $excludeId = null)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (Author::where('slug', $slug)
                  ->when($excludeId, function($query) use ($excludeId) {
                      $query->where('id', '!=', $excludeId);
                  })
                  ->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    /**
     * Maneja la subida de imágenes
     */
    private function handleImageUpload($request, $author)
    {
        $file = $request->file('img');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = public_path('images/user/author/' . $filename);

        $this->imageManager->read($file)
            ->resize(200, 200)
            ->save($path, quality: 80);

        $author->update(['img' => $filename]);
    }

    /**
     * Elimina una imagen
     */
    private function deleteImage($filename)
    {
        $path = public_path('images/user/author/' . $filename);
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
