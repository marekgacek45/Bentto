<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\contactFormController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/', [PagesController::class,'home'] )->name('home');
Route::get('/o-nas', [PagesController::class,'about'] )->name('about');
Route::get('/oferta', [PagesController::class,'offer'] )->name('offer');
Route::get('/aktualności', [PagesController::class,'newses'] )->name('newses');
Route::get('/galeria', [PagesController::class,'gallery'] )->name('gallery');
Route::get('/realizacje', [PagesController::class,'realisations'] )->name('realisations');








Route::get('/kontakt', [PagesController::class,'contact'] )->name('contact');
Route::post('/kontakt', [contactFormController::class,'send'])->name('form.send');




Route::get('/admin', [NewsController::class,'index'] )->name('admin')->middleware('admin');
Route::get('/admin/nowyPost', [NewsController::class,'create'])->name('admin.create');
Route::post('/admin/nowyPost', [NewsController::class, 'store'])->name('store');
Route::post('/admin/nowyPost/upload', [NewsController::class, 'upload'])->name('ckeditor.upload');
Route::get('/{news:slug}/edytuj', [NewsController::class, 'edit'])->name('admin.edit');
Route::get('/{news:slug}', [PagesController::class, 'singleNews'])->name('singleNews');
Route::patch('/{news:slug}', [NewsController::class, 'update'])->name('admin.update');
Route::delete('/{news:slug}', [NewsController::class, 'destroy'])->name('admin.destroy');
