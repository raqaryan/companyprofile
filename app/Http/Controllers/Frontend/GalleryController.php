<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(3);
        return view('frontend.gallery.index', compact('galleries'));
    }

     public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('frontend.gallery.show', compact('gallery'));
    }
}
