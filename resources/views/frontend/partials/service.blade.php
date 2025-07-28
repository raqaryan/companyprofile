<!-- Services Section -->
<section class="page-section" id="service">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Services</h2>
      <h3 class="section-subheading text-muted">What we offer.</h3>
    </div>
    <div class="row text-center">
      @foreach ($services as $service)
        <div class="col-md-4">
          <span class="fa-stack fa-4x text-primary mb-3">
            <i class="fas fa-circle fa-stack-2x"></i>
            <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="my-3">{{ $service->title }}</h4>
          <p class="text-muted">{{ $service->description }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
