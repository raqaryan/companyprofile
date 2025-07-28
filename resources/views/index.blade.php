@extends('frontend.layouts.app')

@section('content')
    <h1>Our Projects</h1>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="card mb-4">
                    @if($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($project->description, 100) }}</p>
                        <a href="{{ route('frontend.projects.show', $project->id) }}" class="btn btn-primary btn-sm">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
