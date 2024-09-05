<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Kategori;
use App\Models\Produk;

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
Route::get('/',[UserController::class,'login']);
Route::post('/auth',[UserController::class,'authentikasi']);
Route::middleware('status_login')->group(function(){
    Route::get('/logout',[UserController::class,'logout']);
    Route::get('/home',[UserController::class,'home']);
    Route::post('/register',[UserController::class,'register']);
    Route::get('/home',[UserController::class,'adm']);

    Route::get('/user', [UserController::class, 'show']);
    Route::post('/user', [UserController::class, 'search']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/create', [UserController::class, 'add']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/user/edit/{id}', [UserController::class, 'update']);


    Route::get('/dashboard',[ProdukController::class,'show']);
    Route::get('/home',[ProdukController::class,'home']);
    Route::get('/dashboard/create',[ProdukController::class,'create']);
    Route::post('/dashboard/create',[ProdukController::class,'add']);
    Route::post('/dashboard/search',[ProdukController::class,'search']);
    Route::get('/dashboard/delete/{id}',[ProdukController::class,'delete']);
    Route::get('/dashboard/edit/{id}',[ProdukController::class,'edit']);
    Route::post('/dashboard/edit/{id}',[ProdukController::class,'update']);

    Route::get('/kategori', [KategoriController::class, 'tampil']);
    Route::get('/kategori/create', [KategoriController::class, 'create']);
    Route::post('/kategori/create',[KategoriController::class,'add']);
    Route::get('/kategori/delete/{id}',[KategoriController::class,'delete']);

    Route::get('/detailproduk/{id}',[ProdukController::class,'detailproduk']);
    Route::get('/keranjang',[KeranjangController::class,'keranjang']);
    Route::post('/keranjang/add/{id}',[KeranjangController::class,'addkeranjang']);
    Route::get('/checkout',[KeranjangController::class,'checkout']);

    Route::get('/transaksi/{id}',[KeranjangController::class,'transaksi']);
    Route::post('/beli/{id}',[KeranjangController::class,'buy']);




    Route::get('/pesanan',[ProdukController::class,'pesanan']);
    Route::get('/kategori-produk',[ProdukController::class,'kategori']);

});
