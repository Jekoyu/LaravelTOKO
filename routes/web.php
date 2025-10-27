<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/produk',[ProdukController::class,'index']);
Route::delete('/produk',[ProdukController::class,'destroy']);
Route::get("/home", function () {
    return view("welcome");
});
Route::get("/index",function (){
    echo "Welcome";
});
Route::get("/", function () {
    return view("welcome");
});

Route::get('/show/{nama}', function ($nama){
    return "Hallo,".$nama;
});

Route::get('/edit/{nama}', function ($nama){
    return "Hallo, nama saya ".$nama;
})->where('nama','[A-Za-z]+');

