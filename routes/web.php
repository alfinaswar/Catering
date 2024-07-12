<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('makanan')->group(function () {
        Route::get('', [MakananController::class, 'index'])->name('makanan.index');
        Route::get('create', [MakananController::class, 'create'])->name('makanan.create');
        Route::delete('destroy/{id}', [MakananController::class, 'destroy'])->name('makanan.destroy');
        Route::POST('store', [MakananController::class, 'store'])->name('makanan.store');
        Route::PUT('edit/{id}', [MakananController::class, 'store'])->name('makanan.edit');
    });
});
