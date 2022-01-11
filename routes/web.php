<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('customers',[App\Http\Controllers\CustomerController::class,'customers'])->name('customers');
Route::get('private',[App\Http\Controllers\CustomerController::class,'private'])->name('private');
Route::get('professional',[App\Http\Controllers\CustomerController::class,'professional'])->name('professional');

Route::post('procustomers',[App\Http\Controllers\CustomerController::class,'procustomer'])->name('procustomer');
Route::post('clicustomers',[App\Http\Controllers\CustomerController::class,'clientCustomer'])->name('clientCustomer');

Route::get('edit/{id}',[App\Http\Controllers\CustomerController::class,'edit'])->name('edit');
Route::post('update/{id}',[App\Http\Controllers\CustomerController::class,'update'])->name('update');

Route::get('events',[App\Http\Controllers\EventController::class,'events'])->name('events');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';