<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\NepoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UnitUsahaController;
use App\Http\Controllers\HubungiKamiController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LegalitasBadanUsahaController;

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

//Home
Route::get('/', function () {
    return view('home',[
        'title' => "Home",
        "posts" => Post::latest()->filter(request(['search','category']))->paginate(10)->withQueryString()
    ]);
})->name('login');

//Login
Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

//Hubungi Kami
Route::get('/hubungi-kami',[HubungiKamiController::class,'index']);

//Dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

//DashboardPosts
Route::resource('/dashboard/posts',DashboardPostController::class);

//Profil
Route::get('/profil/tentang-bumdes',[ProfilController::class,'tentang']);
Route::get('/profil/struktur',[ProfilController::class,'struktur']);
Route::get('/profil/visi-misi',[ProfilController::class,'visi_misi']);

//Nepo
Route::get('/nepo/profil-desa',[NepoController::class,'profil_desa']);
Route::get('/nepo/potensi-desa',[NepoController::class,'potensi_desa']);

//UnitUsaha
Route::get('/unit-usaha/unit-tenda-terowongan',[UnitUsahaController::class,'unit_tenda_terowongan']);
Route::get('/unit-usaha/unit-wisata',[UnitUsahaController::class,'unit_wisata']);
Route::get('/unit-usaha/unit-pertanian-dan-peternakan',[UnitUsahaController::class,'unit_pertanian_dan_peternakan']);

//LegalitasBadanUsaha
Route::get('/legalitas-badan-usaha/sertifikat',[LegalitasBadanUsahaController::class,'sertifikat']);
Route::get('/legalitas-badan-usaha/sk-kepengurusan',[LegalitasBadanUsahaController::class,'sk']);

//Galeri
Route::get('/galeri/kemah-literasi',[GaleriController::class,'kemah_literasi']);
Route::get('/galeri/pesta-adat',[GaleriController::class,'pesta_adat']);
Route::get('/galeri/produk',[GaleriController::class,'produk']);

//Info
Route::get('/info/ad-art',[InfoController::class,'ad_art']);
Route::get('/info/perjanjian-kerjasama',[InfoController::class,'perjanjian_kerjasama']);
Route::get('/info/laporan-keuangan',[InfoController::class,'laporan_keuangan']);
Route::get('/info/bmc',[InfoController::class,'bmc']);
Route::get('/info/company-profile',[InfoController::class,'company_profile']);
