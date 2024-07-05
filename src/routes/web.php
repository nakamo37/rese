<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReseController;

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
Route::get('/', [ReseController::class, 'shop']);
Route::get('/thanks', [ReseController::class, 'thanks']);
Route::get('/done', [ReseController::class, 'done']);
Route::get('/register', [ReseController::class, 'register']);
Route::get('/login', [ReseController::class, 'login']);
