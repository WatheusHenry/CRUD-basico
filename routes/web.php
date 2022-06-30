<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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
    return view('welcome');
});

Route::get('/produtos/create', [ProdutosController::class,'create'])->name('produtos.create');
Route::post('/produtos/store', [ProdutosController::class,'store'])->name('produtos.store');
Route::get('/produtos/show/{id}',[ProdutosController::class,'show'])->name('produtos.show');
Route::get('/produtos/editar/{id}',[ProdutosController::class,'edit'])->name('produtos.edit');
Route::get('/produtos/editar/{id}',[ProdutosController::class,'update'])->name('produtos.update');
Route::get('/produtos/delete/{id}',[ProdutosController::class,'delete'])->name('produtos.delete');
Route::delete('/produtos/destroy/{id}',[ProdutosController::class,'destroy'])->name('produtos.destroy');
Route::get('/produtos',[ProdutosController::class,'index'])->name('produtos.index');
