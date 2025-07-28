<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('editor.home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PT Esa Ijrah Teknindo</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('editor.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Gallery -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('editor.gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Gallery</span>
        </a>
    </li>

    <!-- Product -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('editor.product.index') }}">
            <i class="fas fa-fw fa-box"></i>
            <span>Product</span>
        </a>
    </li>

    <!-- Service -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('editor.service.index') }}">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Service</span>
        </a>
    </li>

    <!-- Contact -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('editor.contact.index') }}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Contact</span>
        </a>
    </li>

</ul>