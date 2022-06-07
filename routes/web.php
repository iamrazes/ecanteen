<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\UserController;

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
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/submission', function () {
    return view('blog.submission');
})->name('submission');
Route::get('/about', function () {
    return view('blog.about');
})->name('about');
Route::get('/contact', function () {
    return view('blog.contact');
})->name('contact');
Route::get('/privacy', function () {
    return view('blog.privacy');
})->name('privacy');
Route::get('/service', function () {
    return view('blog.service');
})->name('service');

// App
Route::get('/app', [AppController::class, 'index'])->name('app');

Route::prefix('app')->group(function () {
    Route::get('/products/{category}/{name}', [AppController::class, 'show'])->name('show');
});

// Admin
Route::prefix('dashboard')->middleware(['auth', 'AdminOnly'])->group(function () {

    // Database
    Route::resource('/users', UserController::class)->names([
        'index'=>'users',
        'create'=>'admin.users.create',
        'store'=>'admin.users.save',
        'destroy'=>'admin.users.destroy',
        'edit'=>'admin.users.edit',
        'update'=>'admin.users.update'
    ]);

    Route::resource('/products', ProductController::class)->names([
        'index'=>'products',
        'create'=>'admin.products.create',
        'store'=>'admin.products.save',
        'destroy'=>'admin.products.destroy',
        'edit'=>'admin.products.edit',
        'update'=>'admin.products.update'
    ]);

    // Route::resource('/users-create', [UserController::class, 'create'])->names('admin.users.create');
    // Route::post('/users-save', [UserController::class, 'store'])->names('admin.users.save');
    // Route::delete('/users-delete/{id}', [UserController::class, 'destroy'])->names('admin.users.destroy');
    // Route::resource('/users-edit/{id}', [UserController::class, 'edit'])->names('admin.users.edit');
    // Route::put('/users-update/{id}', [UserController::class, 'update'])->names('admin.users.update');

    // Route::resource('/products', [ProductController::class, 'index'])->names('products');
    // Route::resource('/products-create', [ProductController::class, 'create'])->names('admin.products.create');
    // Route::post('/products-save', [ProductController::class, 'store'])->names('admin.products.save');
    // Route::delete('/products-delete/{id}', [ProductController::class, 'destroy'])->names('admin.products.destroy');
    // Route::get('/products-edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    // Route::post('/products-update', [ProductController::class, 'update'])->name('admin.products.update');

    // Content
    Route::get('/posts', function () {
        return view('admin.posts.index');
    })->name('posts');
    Route::get('/submissions', function () {
        return view('admin.submissions.index');
    })->name('submissions');
});

Route::prefix('dashboardSeller')->middleware(['auth', 'SellerPermission'])->name('dashboardSeller.')->group(function () {


    Route::get('/products', function () {
        return view('admin.products.index');
    })->name('products');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/products-create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products-save', [ProductController::class, 'store'])->name('admin.products.save');
    Route::delete('/products-delete/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    // Route::get('/products-edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    // Route::post('/products-update', [ProductController::class, 'update'])->name('admin.products.update');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    if (Auth::user()->role == 'admin') {
        return view('dashboard');
    } else {
        if (Auth::user()->role == 'seller')
        return view('dashboard');
        }
    if (Auth::user()->role == 'buyer') {
        return redirect()->route('app');
    }
    })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
