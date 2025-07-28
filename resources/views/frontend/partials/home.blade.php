 @extends('layouts.frontend')

@section('title', 'Beranda')

@section('content')

  <h1 class="text-center">Selamat Datang di Website</h1>


@section('content')
    @include('frontend.partials.product')
    @include('frontend.partials.gallery')
    @include('frontend.partials.service')
    @include('frontend.partials.project')
@endsection
