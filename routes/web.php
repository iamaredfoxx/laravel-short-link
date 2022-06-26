<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

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

Route::get('/', [LinkController::class, 'show'])->name("link");
Route::post('/', [LinkController::class, 'store'])->name("link.store");
Route::get("/{id}", [LinkController::class, 'redirect'])->name("link.redirect");

