@extends('layouts.frontend')

@section('title', $gallery->title)

@section('content')
<section class="page-section py-5" id="gallery-detail" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase text-primary">{{ $gallery->title }}</h2>
            <h5 class="text-muted">{{ $gallery->category ?? '' }}</h5>
            <hr class="w-25 mx-auto border-primary">
        </div>

        <div class="card shadow border-0 mb-4">
            <div class="row g-0">
                <div class="col-md-6">
                    @if ($gallery->image)
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid h-100 w-100 rounded-start" alt="{{ $gallery->title }}">
                    @else
                        <img src="https://via.placeholder.com/600x400?text=No+Image" class="img-fluid rounded-start" alt="No Image">
                    @endif
                </div>
                <div class="col-md-6 bg-white p-4">
                    <h4 class="text-primary mb-3">{{ $gallery->title }}</h4>
                    <p><strong>Kategori:</strong> {{ $gallery->category }}</p>
                    <p><strong>Periode:</strong> {{ $gallery->period }}</p>
                    <p><strong>Klien:</strong> {{ $gallery->client }}</p>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body bg-white">
                <h5 class="text-primary">Deskripsi</h5>
                <hr>
                <p>{{ $gallery->description }}</p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('frontend.gallery.index') }}" class="btn btn-outline-primary btn-lg">
                ← Kembali ke Galeri
            </a>
        </div>
    </div>
</section>
@endsection
