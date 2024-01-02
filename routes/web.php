<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('inputpengguna');
});
Route::get('/showpengguna', [UserController::class, 'index'])->name('showpengguna.index');
Route::get('/inputpengguna', [UserController::class, 'create'])->name('inputpengguna.create');
Route::post('/inputpengguna', [UserController::class, 'store'])->name('inputpengguna.store');
