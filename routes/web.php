<?php
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientController;

use Illuminate\Support\Facades\Route;

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

Route::match(['get', 'post'],'/',[ProdutosController::class, 'index'])->name('home');
Route::match(['get', 'post'],'/categoria',[ProdutosController::class, 'categoria'])->name('categoria');


//client
Route::match(['get', 'post'],'/cadastrar',[ClientController::class, 'cadastrar'])->name('cadastrar');


