@extends('layouts.editor')

@section('title', 'Detail Pesan Kontak')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Pesan dari {{ $message->name }}</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Nama</th>
                    <td>{{ $message->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $message->email }}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{ $message->phone }}</td>
                </tr>
                <tr>
                    <th>Pesan</th>
                    <td>{{ $message->message }}</td>
                </tr>
                <tr>
                    <th>Waktu Dikirim</th>
                    <td>{{ $message->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            </table>
            <a href="{{ route('editor.contact.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
@endsection
