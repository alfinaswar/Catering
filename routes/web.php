<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Makanan;
use App\Models\PaketMakanan;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::get('/', function () {
    $paket = PaketMakanan::get();
    $makanan = Makanan::get();
    return view('welcome', compact('paket', 'makanan'));
})->name('beranda');
Route::get('/all-menu', [MenuController::class, 'allmenu'])->name('menu.allmenu');
Route::POST('store', [MenuController::class, 'store'])->name('custmomer.store');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('makanan')->group(function () {
        Route::get('', [MakananController::class, 'index'])->name('makanan.index');
        Route::get('create', [MakananController::class, 'create'])->name('makanan.create');
        Route::get('paket', [MakananController::class, 'paket'])->name('makanan.paket');
        Route::get('kategori', [MakananController::class, 'kategori'])->name('makanan.kategori');
        Route::delete('destroy/{id}', [MakananController::class, 'destroy'])->name('makanan.destroy');
        Route::delete('destroyKategori/{id}', [MakananController::class, 'destroyKategori'])->name('makanan.destroyKategori');
        Route::delete('hapuspaket/{id}', [MakananController::class, 'destroyPaket'])->name('makanan.hapuspaket');
        Route::POST('store', [MakananController::class, 'storeKategori'])->name('makanan.storeKategori');
        Route::POST('store-paket', [MakananController::class, 'storepaket'])->name('paket-makanan.store');
        Route::POST('store-kategori', [MakananController::class, 'store'])->name('makanan.store');
        Route::get('edit/{id}', [MakananController::class, 'edit'])->name('makanan.edit');
        Route::get('editKategori/{id}', [MakananController::class, 'editKategori'])->name('makanan.editKategori');
        Route::PUT('updateKategori/{id}', [MakananController::class, 'updateKategori'])->name('makanan.updateKategori');
        Route::PUT('update/{id}', [MakananController::class, 'update'])->name('makanan.update');
        Route::get('show', [MakananController::class, 'show'])->name('makanan.show');
        Route::get('detailpaket/{id}', [MakananController::class, 'detailpaket'])->name('makanan.detailpaket');
    });
    Route::prefix('order')->group(function () {
        Route::get('detail/{id}', [OrderController::class, 'index'])->name('order.detail');
        Route::post('bayar', [OrderController::class, 'store'])->name('order.store');
        Route::post('cart', [OrderController::class, 'cart'])->name('order.cart');
        Route::get('history', [OrderController::class, 'history'])->name('order.history');
        Route::get('cart-view', [OrderController::class, 'cartview'])->name('order.cartview');
        Route::POST('gantistatus', [OrderController::class, 'gantistatus'])->name('order.gantistatus');
        Route::get('list-order', [OrderController::class, 'show'])->name('order.show');
        Route::get('konfirmasi/{id}', [OrderController::class, 'konfirmasi'])->name('order.konfirmasi');
        Route::delete('destroytrx/', [OrderController::class, 'destroytrx'])->name('order.destroytrx');
    });
});
