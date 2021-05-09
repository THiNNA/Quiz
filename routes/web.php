<?php

use App\Http\Controllers\BookPhoneController;
use App\Http\Controllers\CalChangeController;
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
    return view('index');
});


Route::get('/manage_book', [BookPhoneController::class, 'index']);
Route::post('/add_book', [BookPhoneController::class, 'create'])->name('book.create');
Route::get('book_phone/destroy/{id}', [BookPhoneController::class, 'destroy'])->name('book_phone.destroy');
Route::PATCH('edit_book/{id}', [BookPhoneController::class, 'update'])->name('book_phone.update');

Route::get('/cal_change', [CalChangeController::class, 'index']);
