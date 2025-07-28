<!-- Gallery Section -->
<section class="page-section bg-light" id="gallery">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Gallery</h2>
      <h3 class="section-subheading text-muted">Our latest documentation.</h3>
    </div>
    <div class="row">
      @foreach ($galleries as $gallery)
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="portfolio-item">
            <a class="portfolio-link" data-bs-toggle="modal" href="#">
              <img class="img-fluid" src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" />
            </a>
            <div class="portfolio-caption">
              <div class="portfolio-caption-heading">{{ $gallery->title }}</div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
