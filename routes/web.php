<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
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
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('welcome');
});
//tampil data makanan di home
Route::get('/makanan',[FoodController::class, 'index'])->name('makanan');
//tambah data makanan
Route::get('/tambahmakanan',[FoodController::class, 'tambahmakanan'])->name('tambahmakanan');
//memasukkan inputan data makanan ke dalam database (post)
Route::post('/insertmakanan',[FoodController::class, 'insertmakanan'])->name('insertmakanan');
//tampil data makanan untuk di update
Route::get('/tampilmakanan/{id}',[FoodController::class, 'tampilmakanan'])->name('tampilmakanan');
//untuk update data makanan
Route::post('/updatemakanan/{id}',[FoodController::class, 'updatemakanan'])->name('updatemakanan');
//untuk delete data makanan
Route::get('/deletemakanan/{id}',[FoodController::class, 'deletemakanan'])->name('deletemakanan');
//untuk kategori
Route::get('/datakategori',[CategoryController::class, 'index'])->name('datakategori');
//untuk tambah kategori
Route::get('/tambahkategori',[CategoryController::class, 'create'])->name('tambahkategori');
//untuk insert kategori
Route::post('/insertkategori',[CategoryController::class, 'store'])->name('insertkategori');
