<?php

use App\Http\Controllers\ReservationController;
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

Route::get( '/' , [ReservationController::class , 'show'])->name('home');
Route::get( '/create' , [ReservationController::class , 'create'])->name('create.user');
Route::post('/store' , [ReservationController::class , 'store'])->name('store.user');
Route::post( '/edit/{id}' , [ReservationController::class , 'edit'])->name('edit.user');
Route::post('/update/{id}' , [ReservationController::class , 'update'])->name('update.user');
Route::delete('/delete/{id}' , [ReservationController::class , 'destroy'])->name('delete.user');
