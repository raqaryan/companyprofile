@extends('layouts.editor')
@section('title', 'Edit Project')

@section('content')
<h1 class="h3 mb-4">Edit Project</h1>

<form action="{{ route('editor.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @include('pages.editor.project.form', ['project' => $project])

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('editor.project.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
