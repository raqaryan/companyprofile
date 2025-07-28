@extends('layouts.editor')
@section('title', 'Project List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Project List</h1>
    <a href="{{ route('editor.project.create') }}" class="btn btn-primary">+ Tambah Project</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="d-flex justify-content-between align-items-center mb-3">
    <form action="{{ route('editor.project.index') }}" method="GET" class="d-flex">
        <input type="text" name="search" class="form-control me-2" placeholder="Cari project..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-secondary">Cari</button>
    </form>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Lokasi</th>
            <th>Klien</th>
            <th>Jenis Kontrak</th>
            <th>Periode</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
        <tr>
            <td><img src="{{ asset('storage/' . $project->image) }}" width="100"></td>
            <td>{{ $project->title }}</td>
            <td>{{ $project->location }}</td>
            <td>{{ $project->client_name ?? '-' }}</td>
            <td>{{ $project->contract_type }}</td>
            <td>{{ $project->contract_period }}</td>
            <td>{{ $project->year }}</td>
            <td>
                <a href="{{ route('editor.project.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('editor.project.destroy', $project->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center mt-3">
    {{ $projects->withQueryString()->links() }}
</div>
@endsection