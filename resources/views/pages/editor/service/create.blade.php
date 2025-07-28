@extends('layouts.editor')

@section('title', 'Tambah Layanan')

@section('content_header')
    <h1>Tambah Layanan</h1>
@endsection

@section('content')
    <form action="{{ route('editor.service.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="5" required></textarea>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('editor.service.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
