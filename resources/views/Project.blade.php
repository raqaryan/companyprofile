@extends('layouts.frontend')

@section('content')
    <h2>Our Projects</h2>

    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                        <p class="text-muted">{{ $project->client }} | {{ $project->period }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
