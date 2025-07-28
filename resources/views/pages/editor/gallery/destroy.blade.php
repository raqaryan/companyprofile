@extends('layouts.editor')

@section('content')
<div class="container-fluid">
    <div class="alert alert-danger mt-4">
        <h4>Apakah Anda yakin ingin menghapus item ini?</h4>
        <p><strong>{{ $gallery->category }} - {{ $gallery->client }}</strong></p>

        @if($gallery->image)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $gallery->image) }}" width="200" class="img-thumbnail">
            </div>
        @endif

        <form action="{{ route('editor.gallery.destroy', $gallery->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
            <a href="{{ route('editor.gallery.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
