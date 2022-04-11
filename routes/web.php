<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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
Route::get('especialidad', function () {
    return view('especialidad');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ficha',[PageController::class, 'ficha']);
Route::get('/{id}',[PageController::class, 'detalle'])->name('nota.detalle');
Route::post('/', [PageController::class, 'crear'])->name('notas.crear');
Route::get('/especialidad/{id}',[PageController::class, 'dato2'])->name('nota.especial');
Route::get('especialidad', [PageController::class,'dato'])->name('especialidad');
Route::get('/editar/{id}',[PageController::class,'editar'])->name('nota.editar');
Route::put('/editar/{id}', [PageController::class,'update'])->name('nota.update');

