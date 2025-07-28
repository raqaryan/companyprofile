<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\editor\GalleryController;
use App\Http\Controllers\editor\HomeController as EditorHomeController;
use App\Http\Controllers\editor\ProductController;
use App\Http\Controllers\editor\ContactController;
use App\Http\Controllers\editor\ServiceController;
use App\Http\Controllers\editor\ProjectController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\ServiceController as FrontendServiceController;
use App\Http\Controllers\Frontend\GalleryController as FrontendGalleryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Di sinilah kamu bisa mendaftarkan route web untuk aplikasi kamu.
| Route ini dimuat oleh RouteServiceProvider dan semuanya berada
| dalam grup middleware "web".
*/

// =======================
// 📌 Route Frontend
// =======================
Route::get('/', [FrontendHomeController::class, 'index'])->name('frontend.home');

Route::get('/projects', [FrontendProjectController::class, 'index'])->name('frontend.project.index');
Route::get('/projects/{id}', [FrontendProjectController::class, 'show'])->name('frontend.projects.show');



Route::get('/services', [FrontendServiceController::class, 'index'])->name('frontend.service.index');
Route::post('contact', [FrontendContactController::class, 'store'])->name('frontend.contact.store');





//product 

Route::get('/produk', [FrontendProductController::class, 'index'])->name('frontend.product.index');
Route::get('/product/{id}', [FrontendProductController::class, 'show'])->name('frontend.product.show');

//service


//gallery
Route::get('/gallery', [FrontendGalleryController::class, 'index'])->name('frontend.gallery.index');
Route::get('/gallery/{id}', [FrontendGalleryController::class, 'show'])->name('frontend.gallery.show');



// =======================
// 🔐 Route Editor/Admin
// =======================
Route::prefix('editor')->name('editor.')->group(function () {
    Route::get('/', [EditorHomeController::class, 'index'])->name('home');

    Route::resource('gallery', GalleryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('project', ProjectController::class);


    // Contact (admin panel)
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

    // Halaman admin tambahan jika diperlukan
    Route::get('/admin', function () {
        return view('adminlte::page');
    })->name('admin');
});
