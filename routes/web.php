<?php

use App\Http\Controllers\fanController;
use App\Http\Controllers\Dogcontroller;
use App\Http\Controllers\jicontrollerinterface;
// use App\Http\Controllers\mancontroller;
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

// Route::get('/', function () {
//     return view('pages');
// });
Route::get('/', [fanController::class, 'index']);
Route::get('/message', [fanController::class, 'gopi']);
Route::get('/m', [jicontrollerinterface::class, 'ki']);
Route::get('/poly', [dogController::class, 'showsound']);

Route::post('/in',[fanController::class, 'insert']);
