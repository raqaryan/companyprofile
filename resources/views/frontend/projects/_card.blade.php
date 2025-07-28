<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100 shadow-sm border-0">
        @if($project->image)
        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
        @else
        <img src="https://via.placeholder.com/600x400?text=No+Image" class="card-img-top" alt="No Image">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text text-muted">
                <strong>Lokasi:</strong> {{ $project->location }} <br>
                <strong>Jenis Kontrak:</strong> {{ $project->contract_type }} <br>
                <strong>Periode:</strong> {{ $project->contract_period }} <br>
                <strong>Tahun:</strong> {{ $project->year }}
            </p>
            @if($project->client_logo)
            <img src="{{ asset('storage/' . $project->client_logo) }}" alt="Logo {{ $project->client_name }}" class="mt-2" style="max-height: 50px;">
            @endif
        </div>
        <div class="card-footer bg-transparent border-0 text-center">
            <a href="{{ route('frontend.projects.show', $project->id) }}" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
        </div>
    </div>
</div>