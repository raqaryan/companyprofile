@extends('layouts.frontend')

@section('content')
    <h2>Our Services</h2>

    <div class="row">
        @foreach ($services as $service)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->title }}</h5>
                        <p class="card-text">{{ $service->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
