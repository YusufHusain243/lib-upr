<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JejaringController;
use App\Http\Controllers\LoginController;
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

Route::get('/galeri', [GaleriController::class, 'more']);
Route::get('/galeri/{page}', [GaleriController::class, 'more']);

Route::get('/sejarah', [SejarahController::class, 'read']);
Route::get('/tim-manajemen', [TimManajemenController::class, 'read']);
Route::get('/faq', [FAQController::class, 'read']);
Route::get('/jejaring', [JejaringController::class, 'read']);
Route::get('/staf-perpustakaan', [StafPerpustakaanController::class, 'read']);

Route::get('/page/{page}', [DashboardController::class, 'information']);
Route::get('/page/{page}/{p}', [DashboardController::class, 'information']);

Route::get('/switch/{locale}', [DashboardController::class, 'switch']);



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin/pages/dashboard',[
            'page' => 'dashboard',
        ]);
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
    Route::post('/kelola-tim-manajemen', [TimManajemenController::class, 'store']);
    Route::delete('/kelola-tim-manajemen/{id}', [TimManajemenController::class, 'destroy']);
    Route::get('/kelola-tim-manajemen/{id}', [TimManajemenController::class, 'edit']);
    Route::patch('/kelola-tim-manajemen/{id}', [TimManajemenController::class, 'update']);
    
    Route::get('/kelola-staf', [StafPerpustakaanController::class, 'index']);
    Route::post('/kelola-staf', [StafPerpustakaanController::class, 'store']);
    Route::patch('/kelola-staf/{id}', [StafPerpustakaanController::class, 'update']);
    
    Route::get('/kelola-jejaring', [JejaringController::class, 'index']);
    Route::post('/kelola-jejaring', [JejaringController::class, 'store']);
    Route::delete('/kelola-jejaring/{id}', [JejaringController::class, 'destroy']);
    Route::get('/kelola-jejaring/{id}', [JejaringController::class, 'edit']);
    Route::patch('/kelola-jejaring/{id}', [JejaringController::class, 'update']);
    
    Route::get('/kelola-faq', [FAQController::class, 'index']);
    Route::post('/kelola-faq', [FAQController::class, 'store']);
    Route::patch('/kelola-faq/{id}', [FAQController::class, 'update']);    
});

