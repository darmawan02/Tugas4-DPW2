<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('template', function () {
    return view('template.base');
});
Route::get('beranda', [HomeController:: class, 'ShowBeranda']);
Route::get('kategori', [HomeController:: class, 'Showkategori']);
Route::get('login', [HomeController:: class, 'ShowLogin']);


Route::get('produk', [ProdukController:: class, 'index']);
Route::get('produk/create', [ProdukController:: class, 'create']);
Route::post('produk', [ProdukController:: class, 'store']);
Route::get('produk/{produk}', [ProdukController:: class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController:: class, 'edit']);
Route::put('produk/{produk}', [ProdukController:: class, 'update']);
Route::delete('produk/{produk}', [ProdukController:: class, 'destroy']);

// Route::get('/', [ClientProdukController::class, 'index']);
//     Route::get('detail/{produk}', [ClientProdukController::class, 'show']);
Route::get('shop', [ClientController::class, 'prod']);