<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JejaringController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StafPerpustakaanController;
use App\Http\Controllers\TimManajemenController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/pengumuman/{id}', [PengumumanController::class, 'read']);
Route::get('/berita/{id}', [BeritaController::class, 'read']);
Route::get('/agenda/{id}', [AgendaController::class, 'read']);
Route::get('/galeri/{page}', [GaleriController::class, 'more']);
Route::get('/sejarah', [SejarahController::class, 'read']);

Route::get('/tim-manajemen', function () {
    return view('pages/tim_manajemen');
});

Route::get('/staf-perpustakaan', function () {
    return view('pages/staf_perpustakaan');
});

Route::get('/jejaring', function () {
    return view('pages/jejaring');
});

Route::get('/faq', function () {
    return view('pages/faq');
});





Route::get('/admin', function () {
    return view('admin/main');
});

Route::get('/dashboard', function () {
    return view('admin/pages/dashboard');
});

Route::get('/kelola-menu', [MenuController::class, 'index']);
Route::post('/kelola-menu', [MenuController::class, 'store']);
Route::delete('/kelola-menu/{id}', [MenuController::class, 'destroy']);
Route::get('/kelola-menu/{id}', [MenuController::class, 'edit']);
Route::patch('/kelola-menu/{id}', [MenuController::class, 'update']);

Route::get('/kelola-pengumuman', [PengumumanController::class, 'index']);
Route::post('/kelola-pengumuman', [PengumumanController::class, 'store']);
Route::delete('/kelola-pengumuman/{id}', [PengumumanController::class, 'destroy']);
Route::get('/kelola-pengumuman/{id}', [PengumumanController::class, 'edit']);
Route::patch('/kelola-pengumuman/{id}', [PengumumanController::class, 'update']);

Route::get('/kelola-berita', [BeritaController::class, 'index']);
Route::post('/kelola-berita', [BeritaController::class, 'store']);
Route::delete('/kelola-berita/{id}', [BeritaController::class, 'destroy']);
Route::get('/kelola-berita/{id}', [BeritaController::class, 'edit']);
Route::patch('/kelola-berita/{id}', [BeritaController::class, 'update']);

Route::get('/kelola-agenda', [AgendaController::class, 'index']);
Route::post('/kelola-agenda', [AgendaController::class, 'store']);
Route::delete('/kelola-agenda/{id}', [AgendaController::class, 'destroy']);
Route::get('/kelola-agenda/{id}', [AgendaController::class, 'edit']);
Route::patch('/kelola-agenda/{id}', [AgendaController::class, 'update']);

Route::get('/kelola-galeri', [GaleriController::class, 'index']);
Route::post('/kelola-galeri', [GaleriController::class, 'store']);
Route::delete('/kelola-galeri/{id}', [GaleriController::class, 'destroy']);
Route::get('/kelola-galeri/{id}', [GaleriController::class, 'edit']);
Route::patch('/kelola-galeri/{id}', [GaleriController::class, 'update']);



Route::get('/kelola-sejarah', [SejarahController::class, 'index']);
Route::post('/kelola-sejarah', [SejarahController::class, 'store']);
Route::patch('/kelola-sejarah/{id}', [SejarahController::class, 'update']);

Route::get('/kelola-tim-manajemen', [TimManajemenController::class, 'index']);
Route::get('/edit-tim-manajemen', function () {
    return view('admin/pages/tim_manajemen/edit_tim_manajemen');
});

Route::get('/kelola-staf', [StafPerpustakaanController::class, 'index']);

Route::get('/kelola-jejaring', [JejaringController::class, 'index']);
Route::get('/edit-jejaring', function () {
    return view('admin/pages/jejaring/edit_jejaring');
});

Route::get('/kelola-faq', [FAQController::class, 'index']);
