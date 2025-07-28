@extends('layouts.editor')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">Edit Pesan</div>
        <div class="card-body">
            <form action="{{ route('editor.contact.update', $message->id) }}" method="POST">
                @csrf @method('PUT')

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $message->nama) }}" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $message->email) }}" required>
                </div>

                <div class="form-group">
                    <label>phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $message->no_hp) }}" required>
                </div>

                <div class="form-group">
                    <label>message</label>
                    <textarea name="message" rows="4" class="form-control" required>{{ old('message', $message->pesan) }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('editor.contact.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
