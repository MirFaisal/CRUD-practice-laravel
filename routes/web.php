<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/products', [ProductController::class, 'index'])->name("INDEX");
Route::get('/products/create', [ProductController::class, 'create'])->name("PRODUCT.CREATE");
Route::post('/products', [ProductController::class, 'store'])->name("PRODUCT.STORE");
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name("PRODUCT.EDIT");
Route::put('/products/{product}/update', [ProductController::class, 'update'])->name("PRODUCT.UPDATE");