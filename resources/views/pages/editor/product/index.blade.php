@extends('layouts.editor')

@section('title', 'Daftar Produk')

@section('content_header')
<h1>Daftar Produk</h1>
@endsection

@section('content')
<a href="{{ route('editor.product.create') }}" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Produk
</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Spesifikasi</th>
            <th>Deskripsi</th>
            <th style="width: 150px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $item)

        <tr>
            <td>
                <img src="{{ asset('storage/' . $item->image) }}" width="100" class="img-thumbnail">
            </td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->specification }}</td>
            <td>{{ Str::limit(strip_tags($item->description), 50) }}</td>
            <td>
                <a href="{{ route('editor.product.edit', $item->id) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('editor.product.destroy', $item->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">Belum ada produk.</td>
        </tr>
        @endforelse
    </tbody>
</table>


@endsection