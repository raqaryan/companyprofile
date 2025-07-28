<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>@yield('title', 'PT Esa Ijrah Teknindo')</title>

  <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />

  <!-- Font Awesome -->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

  <!-- Core theme CSS (includes Bootstrap) -->
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="{{ route('frontend.home') }}">PT Esa Ijrah Teknindo</a>
      <button class="navbar-toggler" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive"
        aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('frontend.product.index') ? 'active text-warning' : '' }}" href="{{ route('frontend.product.index') }}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('frontend.gallery.index') ? 'active text-warning' : '' }}" href="{{ route('frontend.gallery.index') }}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('frontend.project.index') ? 'active text-warning' : '' }}" href="{{ route('frontend.project.index') }}">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link contact-link" href="#contact">Contact Us</a>
          </li>
        </ul>


      </div>
    </div>
  </nav>

  <!-- Content dari masing-masing halaman -->
  @yield('content')

  <!-- Footer -->
  <footer class="footer py-4 bg-dark text-white text-center">
    <div class="container">
      <small>Copyright &copy; PT Esa Ijrah Teknindo {{ date('Y') }}</small>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>