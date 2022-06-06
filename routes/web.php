<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AppController;

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
Route::get('/app', [AppController::class, 'index'])->name('app');

Route::prefix('app')->group(function() {
    Route::get('/products/{category}/{name}', [AppController::class, 'show'])->name('show');
});

// Admin
Route::prefix('dashboard')->middleware(['auth', 'AdminOnly'])->group(function() {

    // Database
    Route::get('/users', function () { return view('admin.users.index'); })->name('users');

    Route::get('/products', function () {
        return view('admin.products.index');
    })->name('products');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/products-create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products-save', [ProductController::class, 'store'])->name('admin.products.save');
    Route::delete('/products-delete/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    // Route::get('/products-edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    // Route::post('/products-update', [ProductController::class, 'update'])->name('admin.products.update');

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
