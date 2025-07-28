<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Service;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->take(6)->get();
        $products = Product::latest()->take(3)->get();
        $services = Service::latest()->take(6)->get();
        $projects = Project::latest()->take(6)->get();

        return view('frontend.home', compact('galleries', 'products', 'services', 'projects'));
    }
}
