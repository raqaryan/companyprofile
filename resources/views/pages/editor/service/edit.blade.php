@extends('layouts.editor')

@section('title', 'Edit Layanan')

@section('content_header')
    <h1>Edit Layanan</h1>
@endsection

@section('content')
    <form action="{{ route('editor.service.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $service->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" rows="5" required>{{ $service->description }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('editor.service.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
