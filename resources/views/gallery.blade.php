@extends('layouts.frontend')

@section('content')
    <h2>Gallery</h2>

    <div class="row">
        @foreach ($galleries as $gallery)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($gallery->image)
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top" alt="{{ $gallery->category }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $gallery->category }}</h5>
                        <p class="card-text">{{ $gallery->description }}</p>
                        <p class="text-muted">{{ $gallery->period }} | {{ $gallery->client }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div>
        {{ $galleries->links() }}
    </div>
@endsection
