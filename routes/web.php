<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route for login
Route::get('/login', function () {
    return view('login');
});

// route for register
Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/create-post', function () {
    return view('create-post');
});

Route::get('/view-posts', function () {
    $posts = App\Models\BlogPost::all();
    return view('view-posts', compact('posts'));
})->name('blog.view');

// routes/web.php

Route::get('/my-posts', function () {
    $user = Auth::user();
    $posts = $user->posts;
    return view('my-posts', compact('posts'));
  })->middleware('auth');
  

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [App\Http\Controllers\BlogPostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [App\Http\Controllers\BlogPostController::class, 'show'])->name('blog_posts.show');
Route::get('/posts/create', [App\Http\Controllers\BlogPostController::class, 'create'])->name('blog_posts.create');

Route::post('/posts', [App\Http\Controllers\BlogPostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}/edit', [App\Http\Controllers\BlogPostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [App\Http\Controllers\BlogPostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [App\Http\Controllers\BlogPostController::class, 'destroy'])->name('posts.destroy');
