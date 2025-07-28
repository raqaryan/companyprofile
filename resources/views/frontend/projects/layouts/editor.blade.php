@extends('layouts.editor')

@section('title', 'Editor Dashboard')

@section('content_header')
    <h1>@yield('page_title', 'Dashboard')</h1>
@endsection

@section('content')
    @yield('content')
@endsection

@section('sidebar')
    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('editor.home') }}" class="brand-link">
            <span class="brand-text font-weight-light">Editor Panel</span>
        </a>

        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                    <li class="nav-item">
                        <a href="{{ route('editor.home') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('editor.gallery.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-image"></i>
                            <p>Gallery</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('editor.product.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Product</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('editor.service.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Service</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('editor.contact.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-envelope"></i>
                            <p>Contact</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('frontend.projects.index') }}" class="nav-link" target="_blank">
                            <i class="nav-icon fas fa-project-diagram"></i>
                            <p>Projects (View)</p>
                        </a>
                    </li>

                    <li class="nav-item">
                       <a href="{{ route('frontend.projects.index') }}" class="nav-link" target="_blank">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>Website</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
@endsection
