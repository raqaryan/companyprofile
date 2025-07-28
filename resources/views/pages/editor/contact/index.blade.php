@extends('layouts.editor')

@section('title', 'Daftar Pesan Kontak')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Pesan Kontak</h3>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Pesan</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contacts as $index => $contact)
                        <tr>
                            <td>{{ $contacts->firstItem() + $index }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($contact->message, 50) }}</td>
                            <td>{{ $contact->created_at->format('d-m-Y H:i') }}</td>
                            <td>
                                <a href="{{ route('editor.contact.show', $contact->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <form action="{{ route('editor.contact.destroy', $contact->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada pesan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
@endsection
