@extends('layouts.editor')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Gallery Item</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('editor.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="category">Kategori</label>
                    <input type="text" class="form-control" id="category" name="category"
                        value="{{ old('category', $gallery->category) }}" required>
                </div>

                <div class="form-group">
                    <label for="period">Periode</label>
                    <input type="text" class="form-control" id="period" name="period"
                        value="{{ old('period', $gallery->period) }}" required>
                </div>

                <div class="form-group">
                    <label for="client">Client</label>
                    <input type="text" class="form-control" id="client" name="client"
                        value="{{ old('client', $gallery->client) }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $gallery->description) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @if($gallery->image)
                    <div class="mt-3">
                        <img src="{{ asset('storage/' . $gallery->image) }}" width="200" class="img-thumbnail">
                        <p class="text-muted mt-1">Gambar saat ini</p>
                    </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('editor.gallery.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection