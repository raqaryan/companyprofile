@extends('layouts.editor')

@section('title', 'Edit Produk')

@section('content_header')
    <h1>Edit Produk</h1>
@endsection

<form action="{{ isset($product) ? route('editor.product.update', $product->id) : route('editor.product.store') }}"
      method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($product))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="title">Judul Produk</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $product->title ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="category">Kategori</label>
        <input type="text" name="category" class="form-control" value="{{ old('category', $product->category ?? '') }}">
    </div>

    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea name="description" rows="4" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="specification">Spesifikasi</label>
        <textarea name="specification" rows="4" class="form-control">{{ old('specification', $product->specification ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Gambar</label>
        <input type="file" name="image" class="form-control-file">
        @if(isset($product) && $product->image)
            <img src="{{ asset('storage/product/' . $product->image) }}" width="100" class="mt-2">
        @endif
    </div>

    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>

