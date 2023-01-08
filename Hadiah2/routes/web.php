<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
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

Route::get('/home', [CarController::class, 'index'])->name('index');
Route::get('/buy-car', [CarController::class, 'create'])->name('create');
Route::post('/store-car', [CarController::class, 'store'])->name('store');
Route::get('/show-transaction/{id}', [CarController::class, 'show'])->name('show');
Route::get('/edit-transaction/{id}', [CarController::class, 'edit'])->name('edit');
Route::patch('/update-transaction/{id}', [CarController::class, 'update']);
Route::delete('/delete-transaction/{id}', [CarController::class, 'delete']);
Route::get('/create-category', [CategoryController::class, 'create']);
Route::post('/store-category', [CategoryController::class, 'store']);