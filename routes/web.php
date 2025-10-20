<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
// use App\Http\Controllers\ProdukController;


Route::get("/produk", [ProdukController::class, 'index']);
// Route::resource('produk', ProdukController::class);
