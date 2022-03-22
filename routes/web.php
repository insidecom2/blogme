<?php

use App\Http\Controllers\LoginController;
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
    $data = ['title' => 'Login'];
    return view('login', $data);
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login/auth', 'authenticate');
});