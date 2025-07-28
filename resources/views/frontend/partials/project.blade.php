<!-- Project Section -->
<section class="page-section" id="project">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Projects</h2>
      <h3 class="section-subheading text-muted">Our portfolio and works.</h3>
    </div>
    <div class="row">
      @foreach ($projects as $project)
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="portfolio-item">
            <a class="portfolio-link" href="{{ route('frontend.projects.show', $project->id) }}">
              <img class="img-fluid" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">{{ $project->title }}</div>
              <div class="portfolio-caption-subheading text-muted">{{ Str::limit($project->description, 100) }}</div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
