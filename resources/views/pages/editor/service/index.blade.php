@extends('layouts.editor')

@section('title', 'Service')

@section('content_header')
    <h1>Daftar Layanan</h1>
    <a href="{{ route('editor.service.create') }}" class="btn btn-primary">+ Tambah Layanan</a>
@endsection

@section('content')
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($services as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ Str::limit($item->description, 100) }}</td>
                    <td>
                        <a href="{{ route('editor.service.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('editor.service.destroy', $item->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3" class="text-center">Belum ada layanan.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
