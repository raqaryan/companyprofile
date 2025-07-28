<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
       $galleries = Gallery::latest()->get();
    return view('pages.editor.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('pages.editor.gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'description' => 'required|string',
            'client' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('gallery', 'public');
        }

        Gallery::create($validated);

        return redirect()->route('editor.gallery.index')
            ->with('success', 'Gallery berhasil ditambahkan.');
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('pages.editor.gallery.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('pages.editor.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'description' => 'required|string',
            'client' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Ganti gambar jika ada file baru
        if ($request->hasFile('image')) {
            if ($gallery->image) {
                Storage::delete('public/' . $gallery->image);
            }
            $validated['image'] = $request->file('image')->store('gallery', 'public');
        }

        $gallery->update($validated);

        return redirect()->route('editor.gallery.index')
            ->with('success', 'Gallery berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus gambar dari storage
        if ($gallery->image) {
            Storage::delete('public/' . $gallery->image);
        }

        $gallery->delete();

        return redirect()->route('editor.gallery.index')
            ->with('success', 'Gallery berhasil dihapus.');
    }
}
