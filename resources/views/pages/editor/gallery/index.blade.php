@extends('layouts.editor')

@section('title', 'Galeri')

@section('content_header')
    <h1>Daftar Galeri</h1>
@endsection

@section('content')
    <a href="{{ route('editor.gallery.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Galeri
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th style="width: 150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($galleries as $item)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $item->image) }}" width="100" class="img-thumbnail" />
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('editor.gallery.edit', $item->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('editor.gallery.destroy', $item->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin ingin hapus galeri ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada galeri.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
