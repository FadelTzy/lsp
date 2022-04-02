<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wv;
use App\Http\Controllers\adminController;

use App\Http\Controllers\ProfillspController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TUKController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PukController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\SkemaController;

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

Route::group(['middleware' => ['auth']], function () {
    Route::post('/save-image', [BeritaController::class, 'image'])->name('ckeditor.image');

    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [adminController::class, 'index'])->name('dashboard.admin');
        Route::resource('profil-lsp', ProfillspController::class);
        Route::post('profil-lsp/kontak', [ProfillspController::class, 'storek'])->name('profil-lsp.storek');
        Route::resource('anggota-lsp', AnggotaController::class);
        Route::post('anggota-lsp/storeu', [AnggotaController::class, 'storeu'])->name('anggota-lsp.storeu');
        //kategori
        Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');
        Route::post('kategori', [KategoriController::class, 'store'])->name('kategori.store');
        Route::post('kategori/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
        Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);
        //berita
        Route::get('berita', [BeritaController::class, 'index'])->name('berita.index');
        Route::get('berita/new-post', [BeritaController::class, 'create'])->name('berita.create');
        Route::get('berita/show/{id}', [BeritaController::class, 'show'])->name('berita.show');
        Route::delete('berita/{id}', [BeritaController::class, 'destroy']);
        Route::post('berita', [BeritaController::class, 'store'])->name('berita.store');
        Route::post('berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
        Route::post('berita/gambar', [BeritaController::class, 'gambar']);

        //TUK
        Route::get('tuk', [TUKController::class, 'index'])->name('tuk.index');
        Route::post('tuk', [TUKController::class, 'store'])->name('tuk.store');
        Route::post('tuk/gambar', [TUKController::class, 'gambar']);
        Route::post('tuk/edit', [TUKController::class, 'edit']);
        Route::delete('tuk/{id}', [TUKController::class, 'destroy']);

        //Agenda
        Route::get('agenda', [AgendaController::class, 'index'])->name('agenda.index');
        Route::post('agenda', [AgendaController::class, 'store'])->name('agenda.store');
        Route::post('agenda/edit', [AgendaController::class, 'edit'])->name('agenda.edit');
        Route::delete('agenda/{id}', [AgendaController::class, 'destroy']);
        //Link
        Route::get('link', [LinkController::class, 'index'])->name('link.index');
        Route::post('link', [LinkController::class, 'store'])->name('link.store');
        Route::post('link/edit', [LinkController::class, 'edit'])->name('link.edit');
        Route::delete('link/{id}', [LinkController::class, 'destroy']);
        Route::post('link/gambar', [LinkController::class, 'gambar']);
        //Puk
        Route::get('prosedur-uji-kompetensi', [PukController::class, 'index'])->name('puk.index');
        Route::post('prosedur-uji-kompetensi', [PukController::class, 'store'])->name('puk.store');
        Route::post('prosedur-uji-kompetensi/edit', [PukController::class, 'edit'])->name('puk.edit');
        Route::delete('prosedur-uji-kompetensi/{id}', [PukController::class, 'destroy']);
        //skema
        Route::get('skema', [SkemaController::class, 'index'])->name('skema.index');
        Route::get('skema/new-post', [SkemaController::class, 'create'])->name('skema.create');
        Route::get('skema/show/{id}', [SkemaController::class, 'show'])->name('skema.show');
        Route::delete('skema/{id}', [SkemaController::class, 'destroy']);
        Route::post('skema', [SkemaController::class, 'store'])->name('skema.store');
        Route::post('skema/edit/{id}', [SkemaController::class, 'edit'])->name('skema.edit');
        Route::post('skema/gambar', [SkemaController::class, 'gambar']);
    });
});
Route::get('/', [wv::class, 'index'])->name('beranda');
Route::get('/kontak', [wv::class, 'kontak'])->name('kontak');
Route::get('/berita', [wv::class, 'berita'])->name('berita');
Route::get('/skema', [wv::class, 'skema'])->name('skema');
Route::get('/profil', [wv::class, 'profil'])->name('profil');

Route::get('/skema/skema1', [wv::class, 'skemaslug']);

Route::get('/faq', [wv::class, 'faq'])->name('faq');

Route::get('/berita/slug', [wv::class, 'beritaslug']);
Route::get('/tuk', [wv::class, 'tuk'])->name('tuk');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
require __DIR__ . '/auth.php';
