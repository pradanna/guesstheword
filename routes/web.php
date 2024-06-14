<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddwordController;

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


Route::get('/congrats', function () {
    return view('chongrats');
});

Route::get('/fail', function () {
    return view('fail');
});

Route::get('/addwords', [AddwordController::class, 'index'])->name('addwords.index');
Route::post('/addwords', [AddwordController::class, 'store'])->name('addwords.store');
Route::delete('/addwords/{id}', [AddwordController::class, 'destroy'])->name('addwords.destroy');
Route::post('/check-word', [AddwordController::class, 'checkWord'])->name('addwords.check');
