@extends('layouts.frontend')

@section('title', 'Galeri')

@section('content')
<section class="py-5" id="gallery-list" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase text-primary">Galeri</h2>
            <p class="text-muted">Dokumentasi kegiatan dan proyek kami</p>
            <hr class="w-25 mx-auto border-primary">
        </div>

        <div class="row">
            @forelse($galleries as $gallery)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <a href="{{ route('frontend.gallery.show', $gallery->id) }}">
                            <img src="{{ asset('storage/' . $gallery->image) }}" 
                                 class="card-img-top img-fluid" 
                                 style="height: 250px; object-fit: cover;" 
                                 alt="{{ $gallery->title }}">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $gallery->title }}</h5>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted">
                    Tidak ada galeri tersedia.
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-4 d-flex justify-content-center">
            {{ $galleries->links() }}
        </div>
    </div>
</section>
@endsection
