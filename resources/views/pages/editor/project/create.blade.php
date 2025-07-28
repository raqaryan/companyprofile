@extends('layouts.editor')
@section('title', 'Tambah Project')

@section('content')
<h1 class="h3 mb-4">Tambah Project</h1>

<form action="{{ route('editor.project.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @include('pages.editor.project.form')

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('editor.project.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
