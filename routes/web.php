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
    return view('about');
});

//Route::get('/about', function () {
//    return view('about');
//});

//Route::get('/contact', function () {
//    return view('contact');
//});

Route::get('/contact', 'PageController@contact');
Route::get('/about', 'PageController@about');

use App\Http\Controllers\BookController;

Route::get('book', [BookController::class,'index']);
Route::post('book', [BookController::class,'store']);

Route::get('book/desc', [BookController::class,'desc']);
Route::get('/book/title/{id}', [BookController::class, 'desc'])->name('book.desc');

Route::get('book/create', [BookController::class,'create']);

Route::get('book/edit', [BookController::class,'edit']);
Route::get('book/{id}/edit', [BookController::class,'edit']);
Route::put('book/{id}', [BookController::class,'update']);
Route::delete('book/{id}', [BookController::class,'destroy']);

use App\Http\Controllers\PenulisController;

Route::get('penulis',[PenulisController::class,'index']);

Route::post('penulis',[PenulisController::class,'store']);
Route::get('penulis/create',[PenulisController::class,'create']);

Route::get('penulis/{id}/edit',[PenulisController::class,'edit']);
Route::put('penulis/{id}/',[PenulisController::class,'update']);

Route::delete('penulis/{id}/',[PenulisController::class,'destroy']);