@extends('layouts.frontend')

@section('title', 'Beranda')

@section('content')

<!-- ================== HERO ================== -->
<header class="hero-section text-white" style="position: relative; height: 100vh;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
                background: url('{{ asset('img/bg.jpg') }}') no-repeat center center; 
                background-size: cover; z-index: 1;"></div>

    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background: rgba(0,0,0,0.4); z-index: 2;"></div>

    <div class="container text-center" style="position: relative; z-index: 3; height: 100%; 
                display: flex; align-items: center; justify-content: center;">
        <div class="intro-text">
            <div class="intro-lead-in mb-3 fs-4">PT ESA IJRAH TEKNINDO</div>
            <div class="intro-heading text-uppercase fw-bold mb-4 fs-1">Trusted Partner for Your Energy Projects</div>
            <a class="btn btn-primary btn-xl text-uppercase px-4 py-2 fw-bold" href="#about">About Us</a>
        </div>
    </div>
</header>

<!-- ================== ABOUT ================== -->
<section id="about" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="section-heading text-uppercase mb-4">Tentang Kami</h2>
        <div class="section-subheading text-muted mx-auto" style="max-width: 800px;">
            Kami adalah perusahaan yang bergerak di bidang industri migas, konstruksi, dan pengadaan jasa teknikal dengan profesionalisme tinggi dan pelayanan unggul untuk klien nasional dan internasional.
        </div>
    </div>
</section>

<!-- ================== PRODUCT ================== -->
<section id="product" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Product</h2>
            <h3 class="section-subheading text-muted">Our best products.</h3>
        </div>

        <div class="row">
            @forelse ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <a href="{{ route('frontend.product.show', $product->id) }}">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <a href="{{ route('frontend.product.show', $product->id) }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">Tidak ada produk tersedia.</div>
            @endforelse
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('frontend.product.index') }}" class="btn btn-primary">Lihat Semua Produk</a>
        </div>
    </div>
</section>

<!-- ================== SERVICE ================== -->
<section id="service" class="bg-light py-5">
    <div class="container text-center">
        <h2 class="section-heading text-uppercase">Layanan Kami</h2>
        <h3 class="section-subheading text-muted mb-5">Yang kami tawarkan</h3>

        {{-- Baris 1 --}}
        <div class="row mb-4">
            <div class="col-md-4 mb-4">
                <div class="service-box h-100 p-4 bg-white shadow-sm rounded">
                    <span class="fa-stack fa-3x text-primary mb-3">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-calculator fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Balancing</h4>
                    <p class="text-muted">Perhitungan teknik, Diagram Alir Proses (PFD), P&ID.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <img src="{{ asset('storage/service/alingnment.jpg') }}" class="img-fluid rounded" style="height: 270px; object-fit: cover;" alt="Balancing">
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-box h-100 p-4 bg-white shadow-sm rounded">
                    <span class="fa-stack fa-3x text-primary mb-3">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-drafting-compass fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Comisioning</h4>
                    <p class="text-muted">Diagram Loop, Struktur, Gambar As-Built, dan Desain Instrumentasi.</p>
                </div>
            </div>
        </div>

        {{-- Baris 2 --}}
        <div class="row mb-4 align-items-center">
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/service/balancing.jpg') }}" class="img-fluid rounded" style="height: 220px; object-fit: cover;" alt="Alignment">
            </div>
            <div class="col-md-6 mb-4">
                <div class="service-box h-100 p-4 bg-white shadow-sm rounded">
                    <span class="fa-stack fa-3x text-primary mb-3">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Alignment</h4>
                    <p class="text-muted">
                        Presisi tinggi untuk shaft, belt, dan coupling alignment menggunakan teknologi laser.
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <img src="{{ asset('storage/service/comisioning.jpg') }}" class="img-fluid rounded" style="height: 220px; object-fit: cover;" alt="Comisioning">
            </div>
        </div>
    </div>
</section>

<!-- ================== GALLERY ================== -->
<section id="gallery" class="py-5">
    <div class="container text-center">
        <h2 class="section-heading text-uppercase">Gallery</h2>
        <h3 class="section-subheading text-muted mb-5">Our documentation.</h3>
        <div class="row">
            @forelse ($galleries as $gallery)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('frontend.gallery.show', $gallery->id) }}">
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="{{ $gallery->title }}">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $gallery->title }}</h5>
                        <a href="{{ route('frontend.gallery.show', $gallery->id) }}" class="btn btn-sm btn-outline-primary mt-2">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-muted">Belum ada data gallery.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- ================== PROJECTS ================== -->
<section class="bg-light py-5" id="projects">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Project Terbaru</h2>
            <h3 class="section-subheading text-muted">Lihat beberapa proyek unggulan kami</h3>
        </div>
        <div class="row">
            @foreach ($projects as $project)
            @include('frontend.projects._card', ['project' => $project])
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('frontend.project.index') }}" class="btn btn-primary">Lihat Semua Project</a>
        </div>
    </div>
</section>

<!-- ================== CONTACT ================== -->
<section id="contact" class="py-5">
    <div class="container text-center">
        <h2 class="section-heading text-uppercase">Contact Us</h2>
        <h3 class="section-subheading text-muted mb-5">Silakan isi form di bawah.</h3>

        @if(session('success'))
        <div id="success-message" class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form id="contactForm" action="{{ route('frontend.contact.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input name="name" class="form-control" type="text" placeholder="Your Name *" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input name="email" class="form-control" type="email" placeholder="Your Email *" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input name="phone" class="form-control" type="tel" placeholder="Your Phone *" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" rows="5" placeholder="Your Message *" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg text-uppercase px-4">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            var msg = document.getElementById('success-message');
            if (msg) msg.style.display = 'none';
        }, 5000);
    </script>
</section>

@endsection