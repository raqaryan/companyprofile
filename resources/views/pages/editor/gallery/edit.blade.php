@extends('layouts.editor')

@section('title', 'Edit Galeri')

@section('content_header')
<h1>Edit Galeri</h1>
@endsection

@section('content')
<form action="{{ route('editor.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" name="title" id="title" value="{{ $gallery->title }}" class="form-control" required />
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea name="description" id="description" rows="3" class="form-control">{{ $gallery->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <input type="text" name="category" id="category" value="{{ $gallery->category }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="period" class="form-label">Periode</label>
        <input type="text" name="period" id="period" value="{{ $gallery->period }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="client" class="form-label">Client</label>
        <input type="text" name="client" id="client" value="{{ $gallery->client }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Gambar Saat Ini</label><br>
        <img src="{{ asset('storage/' . $gallery->image) }}" width="150" class="img-thumbnail mb-2" />
        <input type="file" name="image" id="image" class="form-control" />
        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('editor.gallery.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection