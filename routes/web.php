<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeaController;
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

Route::get('/products', [TeaController::class, 'index'])->name('getAllProducts');
Route::get('/products/delete/{id}', [TeaController::class, 'delete'])->name('deleteProduct');
Route::get('/products/new/{name}/{company}/{servings}/{price}', [TeaController::class, 'new'])->name('newProduct');
