@extends('layouts.editor')

@section('title', 'Detail Produk')

@section('content_header')
    <h1>Detail Produk</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->title }}</h5>

            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid mb-3" width="300">
            @endif

            <p class="card-text">{{ $product->description }}</p>

            <a href="{{ route('editor.product.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
