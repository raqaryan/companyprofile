@extends('layouts.frontend')

@section('title', 'Projects')

@section('content')
<section class="page-section bg-light" id="projects">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading text-uppercase">Project List</h2>
            <h3 class="section-subheading text-muted">Beberapa proyek terbaik kami</h3>
        </div>

        <div class="row">
            <div class="row">
                @forelse ($projects as $project)
                @include('frontend.projects._card', ['project' => $project])
                @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        Tidak ada data proyek untuk ditampilkan.
                    </div>
                </div>
                @endforelse
            </div>


            <div class="d-flex justify-content-center mt-4">
                {{ $projects->links() }}
            </div>
        </div>
</section>
@endsection