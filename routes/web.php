<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriBarangController;

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


Route::get('/', [DashboardController::class, 'index'])
->middleware(['auth', 'verified'])
->name('dashboard');

Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.act');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard/admin', function(){
        return view('pages.dashboard');
    })
    ->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


    Route::get('/admin/kategori', [KategoriBarangController::class, 'index'])->name('admin.kategori');
    Route::get('/admin/kategori/tambah', [KategoriBarangController::class, 'create'])->name('admin.kategori.tambah');
    Route::post('/admin/kategori/tambah/act', [KategoriBarangController::class, 'store'])->name('admin.kategori.tambah.act');
    Route::get('/admin/kategori/edit/{id}', [KategoriBarangController::class, 'edit'])->name('admin.kategori.edit');
    Route::post('/admin/kategori/edit/act/{id}', [KategoriBarangController::class, 'update'])->name('admin.kategori.edit.act');
    Route::delete('/admin/kategori/hapus/act/{id}', [KategoriBarangController::class, 'destroy'])->name('admin.kategori.delete.act');


    Route::get('/admin/event', [EventController::class, 'index'])->name('admin.event');
    Route::post('/admin/event/tambah', [EventController::class, 'store'])->name('admin.event.tambah.act');
    Route::delete('/admin/event/delete/{id}', [EventController::class, 'destroy'])->name('admin.event.delete.act');


    Route::get('/admin/carousel', [CarouselController::class, 'index'])->name('admin.carousel');
    Route::post('/admin/carousel/tambah/act', [CarouselController::class, 'store'])->name('admin.carousel.tambah.act');
    Route::delete('/admin/carousel/hapus/act/{id}', [CarouselController::class, 'destroy'])->name('admin.carousel.delete.act');

    Route::get('/admin/barang', [BarangController::class, 'index'])->name('admin.barang');
    Route::get('/admin/barang/tambah', [BarangController::class, 'create'])->name('admin.barang.tambah');
    Route::post('/admin/barang/tambah/act', [BarangController::class, 'store'])->name('admin.barang.tambah.act');
    Route::get('/admin/barang/edit/{id}', [BarangController::class, 'edit'])->name('admin.barang.edit');
    Route::post('/admin/barang/edit/{id}', [BarangController::class, 'update'])->name('admin.barang.edit.act');
    Route::delete('/admin/barang/delete/{id}', [BarangController::class, 'destroy'])->name('admin.barang.delete.act');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
