<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SponsorStoreRequest;
use App\Http\Requests\SponsorUpdateRequest;
use App\Models\Sponsor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SponsorController extends Controller
{
    private $imageManager;

    public function __construct()
    {
        $this->middleware('auth');
        $this->imageManager = new ImageManager(new Driver());
    }

    public function index()
    {
        $sponsors = Sponsor::orderBy('id', 'DESC')->paginate(5);
        return view('dashboard.blog.sponsors.index', compact('sponsors'));
    }

    public function create()
    {
        return view('dashboard.blog.sponsors.create');
    }

    public function store(SponsorStoreRequest $request)
    {
        $data = $request->all();
        $data['slug'] = $this->generateUniqueSlug($data['name']);

        $sponsor = Sponsor::create($data);

        if ($request->hasFile('img')) {
            $this->handleImageUpload($request, $sponsor);
        }

        toastr()->success('Patrocinante creado con éxito');
        return redirect()->route('sponsors.index')->with('info', 'Patrocinante creado con éxito');
    }

    public function show($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('dashboard.blog.sponsors.show', compact('sponsor'));
    }

    public function edit($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('dashboard.blog.sponsors.edit', compact('sponsor'));
    }

    public function update(SponsorUpdateRequest $request, $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $data = $request->all();

        if ($sponsor->name !== $data['name']) {
            $data['slug'] = $this->generateUniqueSlug($data['name'], $sponsor->id);
        } else {
            $data['slug'] = $sponsor->slug;
        }

        $sponsor->update($data);

        if ($request->hasFile('img')) {
            if ($sponsor->img) {
                $this->deleteImage($sponsor->img);
            }
            $this->handleImageUpload($request, $sponsor);
        }

        toastr()->success('Patrocinante actualizado con éxito');
        return redirect()->route('sponsors.index')->with('info', 'Patrocinante actualizado con éxito');
    }

    public function destroy($id)
    {
        $sponsor = Sponsor::findOrFail($id);

        if ($sponsor->img) {
            $this->deleteImage($sponsor->img);
        }

        $sponsor->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

    private function generateUniqueSlug($name, $excludeId = null)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (Sponsor::where('slug', $slug)
                  ->when($excludeId, function($query) use ($excludeId) {
                      $query->where('id', '!=', $excludeId);
                  })
                  ->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    private function handleImageUpload($request, $sponsor)
    {
        $file = $request->file('img');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $path = public_path('images/user/sponsor/' . $filename);

        $this->imageManager->read($file)
            ->resize(200, 200)
            ->save($path, quality: 80);

        $sponsor->update(['img' => $filename]);
    }

    private function deleteImage($filename)
    {
        $path = public_path('images/user/sponsor/' . $filename);
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
