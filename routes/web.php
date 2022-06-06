<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Blog
Route::get('/', function () { return view('welcome'); })->name('welcome');
Route::get('/submission', function () { return view('blog.submission'); })->name('submission');
Route::get('/about', function () { return view('blog.about'); })->name('about');
Route::get('/contact', function () { return view('blog.contact'); })->name('contact');
Route::get('/privacy', function () { return view('blog.privacy'); })->name('privacy');
Route::get('/service', function () { return view('blog.service'); })->name('service');

// App
Route::get('/app', function () { return view('app'); })->name('app');

// Admin
Route::prefix('dashboard')->middleware(['auth', 'AdminOnly'])->group(function() {

    Route::get('/', function () { return view('dashboard'); })->name('admin');

    // Database
    Route::get('/users', function () { return view('admin.users.index'); })->name('users');

    Route::get('/products', function () {
        return view('admin.products.index');
    })->name('products');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/products-create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products-save', [ProductController::class, 'store'])->name('admin.products.save');
    Route::delete('/products-delete/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    // Content
    Route::get('/posts', function () { return view('admin.posts.index'); })->name('posts');
    Route::get('/submissions', function () { return view('admin.submissions.index'); })->name('submissions');

});

Route::get('/dashboard', function () {
    if (Auth::user()->role == 'admin') {
        return view('dashboard');
    }else{
        return redirect()->route('app');
    }
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
