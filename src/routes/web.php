<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;

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

Route::get('/', [CheckController::class, 'index']);
Route::get('/confirm', [CheckController::class, 'confirm']);
Route::get('/thanks', [CheckController::class, 'thanks']);
Route::get('/admin', [CheckController::class, 'admin']);