<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArinidController;
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
/*Route::get('/hello', function () {
    return 'Hello world';
});
Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});
Route::get('page/{nomor}', function($nomor){
    return 'Ini Halaman ke-' . $nomor;
});
Route::get('/gambar', function () {
    return view('gambar');
});*/

Route::get('user', [ArinidController::class, 'index']);

Route::resource('user', ArinidController::class);

Route::get("/Arinid", function(){
    return view("Arinid");
});