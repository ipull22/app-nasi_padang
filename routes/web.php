<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route:: get('/', [HomeController::class, 'index'])->name('home');
Route:: get('/about', [AboutController::class, 'index'])->name('about');
Route:: get('/Profile', [ProfileController::class, 'index'])->name('profile');
Route:: get('/contact', [ContactController::class, 'index'])->name('contact');
Route::resource('categories', CategoryController::class);


// Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
//Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');



Route::get('/kontak', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/kontak', [ContactController::class, 'sendMessage'])->name('contact.send');


Route:: get('/signup', [AuthController::class, 'signup'])->name('signup');
Route:: post('/store-signup', [AuthController::class, 'storeSignup'])->name('storeSignup');

Route:: get('/signin', [AuthController::class, 'signin'])->name('signin');
Route:: post('/store-signin', [AuthController::class, 'storeSignin'])->name('storeSignin');

Route::get('/logout', function(){
    Auth::logout();
    return redirect()->to('/')->with('success','Berhasil logout!');
})->name('logout')->middleware('auth');

Route::resource('posts', PostController::class);
Route::get('/posts', [PostController::class, 'index'])->name('posts');


