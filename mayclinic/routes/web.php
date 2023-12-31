<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FormController::class, 'index']);
Route::post('/store',[FormController::class, 'store']);
Route::get('/delete/{id}',[FormController::class, 'destroy']);
Route::get('/edit/{id}',[FormController::class, 'edit']);
Route::post('/edit/{id}',[FormController::class, 'update']);