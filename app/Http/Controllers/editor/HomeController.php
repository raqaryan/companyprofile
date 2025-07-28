<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Service;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.editor.dashboard.index', [
            'galleryCount' => Gallery::count(),
            'productCount' => Product::count(),
            'serviceCount' => Service::count(),
            'contactCount' => Contact::count(),
        ]);
    }
}
