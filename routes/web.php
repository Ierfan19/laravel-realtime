<?php

use App\Events\ServerCreated;
use App\Http\Controllers\ProfilController;
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
Route::get('/tes', function () {
    ServerCreated::dispatch('message wooeee');
    echo 'okkkk';
});
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/profil/data', [ProfilController::class, 'getProfil']);
Route::get('/profil/create', [ProfilController::class, 'create']);
Route::get('/profil/hapus/{id}', [ProfilController::class, 'destroy']);
Route::post('/profil/create', [ProfilController::class, 'store']);
