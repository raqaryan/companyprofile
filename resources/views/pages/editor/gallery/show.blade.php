@extends('layouts.editor')

@section('title', 'Detail Galeri')

@section('content_header')
    <h1>Detail Galeri</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $gallery->title }}</h5>

            @if ($gallery->image)
                <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid rounded mb-3" width="300">
            @endif

            <p class="card-text">
                <strong>Deskripsi:</strong><br>
                {{ $gallery->description }}
            </p>

            <a href="{{ route('editor.gallery.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('editor.gallery.edit', $gallery->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('editor.gallery.destroy', $gallery->id) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Yakin ingin menghapus galeri ini?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
@endsection
