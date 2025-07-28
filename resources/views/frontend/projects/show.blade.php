@extends('layouts.frontend')

@section('title', $project->title)

@section('content')
<section class="page-section py-5" id="project-detail" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase text-primary">{{ $project->title }}</h2>
            <h5 class="text-muted">{{ $project->location }}</h5>
            <hr class="w-25 mx-auto border-primary">
        </div>

        <div class="card shadow border-0 mb-4">
            <div class="row g-0">
                <div class="col-md-6">
                    @if ($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid h-100 w-100 rounded-start" alt="{{ $project->title }}">
                    @else
                        <img src="https://via.placeholder.com/600x400?text=No+Image" class="img-fluid rounded-start" alt="No Image">
                    @endif
                </div>
                <div class="col-md-6 bg-white p-4">
                    <h4 class="text-primary mb-3">{{ $project->title }}</h4>
                    <p><strong> Lokasi:</strong> {{ $project->location }}</p>
                    <p><strong> Jenis Kontrak:</strong> {{ $project->contract_type }}</p>
                    <p><strong> Periode:</strong> {{ $project->contract_period }}</p>
                    <p><strong> Tahun:</strong> {{ $project->year }}</p>
                    <p><strong> Klien:</strong> {{ $project->client_name ?? '-' }}</p>

                    @if ($project->client_logo)
                        <div class="mt-4">
                            <strong>Logo Klien:</strong><br>
                            <img src="{{ asset('storage/' . $project->client_logo) }}" alt="Client Logo" height="50">
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body bg-white">
                <h5 class="text-primary"> Deskripsi Proyek</h5>
                <hr>
                <p>{{ $project->description }}</p>
            </div>
        </div>

        <div class="text-center mt-5">
           <a href="{{ route('frontend.project.index') }}" class="btn btn-outline-primary btn-lg">
                ← Kembali ke Daftar Proyek
            </a>
        </div>
    </div>
</section>
@endsection
