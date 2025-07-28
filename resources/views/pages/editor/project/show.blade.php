@extends('layouts.editor')
@section('title', 'Detail Project')

@section('content')
<h1 class="h3 mb-4">{{ $project->title }}</h1>

<img src="{{ asset('storage/' . $project->image) }}" width="100%" class="mb-3" alt="">

<table class="table">
    <tr>
        <th>Judul</th>
        <td>{{ $project->title }}</td>
    </tr>
    <tr>
        <th>Deskripsi</th>
        <td>{{ $project->description }}</td>
    </tr>
    <tr>
        <th>Lokasi</th>
        <td>{{ $project->location }}</td>
    </tr>
    <tr>
        <th>Jenis Kontrak</th>
        <td>{{ $project->contract_type }}</td>
    </tr>
    <tr>
        <th>Periode</th>
        <td>{{ $project->contract_period }}</td>
    </tr>
    <tr>
        <th>Tahun</th>
        <td>{{ $project->year }}</td>
    </tr>
    <tr>
        <th>Logo Klien</th>
        <td>
            @if($project->client_logo)
                <img src="{{ asset('storage/' . $project->client_logo) }}" width="100">
            @endif
        </td>
    </tr>
</table>
@endsection
