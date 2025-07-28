<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Company Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        .navbar {
            background-color: #212529;
            padding: 1rem 0;
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
            font-size: 1rem;
            text-transform: uppercase;
            text-decoration: none;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107;
            /* kuning */
        }

        .navbar-nav .nav-link.active {
            color: #ffc107;
        }

        .navbar-nav .contact-link {
            text-decoration: underline;
            color: #ffc107;
        }
    </style>


<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('project*') ? 'active' : '' }}" href="{{ route('project.index') }}">PROJECT LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product*') ? 'active' : '' }}" href="{{ route('product.index') }}">PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('service*') ? 'active' : '' }}" href="{{ route('service') }}">SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('gallery*') ? 'active' : '' }}" href="{{ route('gallery.index') }}">GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact*') ? 'active' : '' }} contact-link" href="#contact">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>


    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>