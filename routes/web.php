<?php

use App\Http\Controllers\Api\GoogleController;
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
    return view('welcome');
});


Route::get('oauth/google/redirect', [GoogleController::class, 'redirect']);
Route::get('oauth/google/callback', [GoogleController::class, 'callback']);