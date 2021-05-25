<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profil\DelhController;
use App\Http\Controllers\Profil\DplhController;
use App\Http\Controllers\Profil\PerkebunanController;
use App\Http\Controllers\Profil\PertambanganBatuBaraController;
use App\Http\Controllers\Profil\PertambanganEmasController;
use App\Http\Controllers\Profil\PertambanganLainnyaController;
use App\Http\Controllers\Profil\PertambanganZirconController;
use App\Http\Controllers\Profil\PrakartaController;
use App\Http\Controllers\Profil\ProdukController;
use App\Http\Controllers\Profil\ProyekController;
use App\Http\Controllers\Profil\StrukturOrganisasiController;
use App\Http\Controllers\Profil\Ukl_UplController;
use App\Http\Controllers\SingleBeritaController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('Berita', [BeritaController::class, 'index'])->name('berita');
Route::get('Berita/Detail/{id}', [SingleBeritaController::class, 'index'])->name('single-berita');
Route::get('About', [AboutController::class, 'index'])->name('about');

Route::prefix('Profil')->group(function(){
    Route::get('Prakarta', [PrakartaController::class, 'index'])->name('prakarta');
    Route::get('Proyek', [ProyekController::class, 'index'])->name('proyek');
    Route::get('Produk-Kami', [ProdukController::class, 'index'])->name('Produk');
    Route::get('Struktur-Organisasi', [StrukturOrganisasiController::class, 'index'])->name('Struktur-Organisasi');
    Route::get('UKL-UPL', [Ukl_UplController::class, 'index'])->name('UKL-UPL');
    Route::get('DELH', [DelhController::class, 'index'])->name('DELH');
    Route::get('DPLH', [DplhController::class, 'index'])->name('DPLH');
    Route::get('Pertambangan-Batu-Bara', [PertambanganBatuBaraController::class, 'index'])->name('BatuBara');
    Route::get('Pertambangan-Zircon', [PertambanganZirconController::class, 'index'])->name('Pertambangan-Zircon');
    Route::get('Pertambangan-Emas', [PertambanganEmasController::class, 'index'])->name('Pertambangan-Emas');
    Route::get('Perkebunan', [PerkebunanController::class, 'index'])->name('Perkebunan');
    Route::get('Pertambangan-Lainnya', [PertambanganLainnyaController::class, 'index'])->name('Pertambangan-Lainnya');
});

 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });



Route::prefix('admin')->middleware(['auth','admin'])->group(function(){

    Route::resource('/News', NewsController::class);

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
