@extends('layouts.frontend')

@section('title', 'Produk Kami')

@section('content')
<section id="product" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-heading text-uppercase">Produk Kami</h2>
            <h3 class="section-subheading text-muted">Produk unggulan yang kami tawarkan.</h3>
        </div>

        {{-- Form pencarian (jika ada) --}}
        <form method="GET" action="{{ route('frontend.product.index') }}" class="mb-4 text-center">
            <input type="text" name="search" placeholder="Cari produk..." class="form-control d-inline w-25" value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary mt-2">Cari</button>
        </form>

        <div class="row">
            @forelse ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <a href="{{ route('frontend.product.show', $product->id) }}">
                            <img src="{{ asset('storage/' . $product->image) }}" 
                                 class="card-img-top img-fluid" 
                                 style="height: 200px; object-fit: cover;"
                                 alt="{{ $product->title }}">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <a href="{{ route('frontend.product.show', $product->id) }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center text-muted">Tidak ada produk ditemukan.</div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-4 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</section>
@endsection
