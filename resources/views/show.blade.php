@extends('frontend.layouts.app')

@section('content')
    <h1>{{ $project->title }}</h1>
    @if($project->image)
        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="img-fluid mb-4">
    @endif
    <p>{{ $project->description }}</p>
    <a href="{{ route('frontend.projects.index') }}" class="btn btn-secondary">Back to Projects</a>
@endsection
