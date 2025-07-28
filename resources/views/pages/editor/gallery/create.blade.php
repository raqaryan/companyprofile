@extends('layouts.editor')

@section('title', 'Tambah Galeri')

@section('content_header')
<h1>Tambah Galeri</h1>
@endsection

@section('content')

{{-- Tampilkan error validasi --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('editor.gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required />
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea name="description" id="description" rows="3" class="form-control">{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Gambar</label>
        <input type="file" name="image" id="image" class="form-control" required />
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <input type="text" name="category" id="category" class="form-control" value="{{ old('category') }}" required />
    </div>

    <div class="mb-3">
        <label for="period" class="form-label">Periode</label>
        <input type="text" name="period" id="period" class="form-control" value="{{ old('period') }}" required />
    </div>

    <div class="mb-3">
        <label for="client" class="form-label">Klien</label>
        <input type="text" name="client" id="client" class="form-control" value="{{ old('client') }}" required />
    </div>


    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('editor.gallery.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection