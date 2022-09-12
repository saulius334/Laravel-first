<?php

use App\Http\Controllers\BlogController as blogCon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NiceController as NiceCon;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('blog')->group(function () {
    Route::get('/', [blogCon::class, 'index'])->name('index');
    Route::get('/create', [blogCon::class, 'create'])->name('create');
});