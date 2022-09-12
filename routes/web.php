<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NiceController as NiceCon;
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

Route::get('/eziukas', function () {
    return '<h1>ezzzziukas</h1>';
});
Route::get('/fun/{kiek}/{abc?}', [NiceCon::class, 'fun']);

Route::get('/suma', [NiceCon::class, 'showForm'])->name('show');
Route::post('/suma', [NiceCon::class, 'doForm'])->name('calculate');
