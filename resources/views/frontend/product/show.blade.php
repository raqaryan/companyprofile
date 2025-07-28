@extends('layouts.frontend')

@section('title', 'Detail Produk')

@section('content')
<section class="page-section">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">{{ $product->title }}</h2>
        <hr class="star-dark mb-5" />

        <div class="row justify-content-center">
            <div class="col-md-8">
                <img class="img-fluid mb-4 rounded d-block mx-auto"
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->title }}"
                    style="max-width: 300px; height: auto; object-fit: cover;">

                <div class="mb-3">
                    <h5 class="text-muted">Kategori:</h5>
                    <p>{{ $product->category ?? '-' }}</p>
                </div>

                <div class="mb-3">
                    <h5 class="text-muted">Deskripsi:</h5>
                    <p>{!! nl2br(e($product->description)) !!}</p>
                </div>

                <div class="mb-3">
                    <h5 class="text-muted">Spesifikasi:</h5>
                    <p>{!! nl2br(e($product->specification)) !!}</p>
                </div>

                <a href="{{ route('frontend.product.index') }}" class="btn btn-secondary mt-4">← Kembali ke Produk</a>
            </div>
        </div>
    </div>
</section>
@endsection