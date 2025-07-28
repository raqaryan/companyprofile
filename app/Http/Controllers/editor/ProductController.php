<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::latest()->get();
        return view('pages.editor.product.index', compact('products'));
    }

    // Menampilkan form tambah produk
    public function create()
    {
        return view('pages.editor.product.create');
    }

    // Menyimpan data produk baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'specification' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('product', 'public');
        }

        Product::create($validated);

        return redirect()->route('editor.product.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.editor.product.edit', compact('product'));
    }

    // Menyimpan hasil edit
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'specification' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['title', 'category', 'description', 'specification']);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $data['image'] = $request->file('image')->store('product', 'public');
        }

        $product->update($data);

        return redirect()->route('editor.product.index')->with('success', 'Produk berhasil diperbarui.');
    }

    // Hapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }

        $product->delete();

        return redirect()->route('editor.product.index')->with('success', 'Produk berhasil dihapus.');
    }
}
