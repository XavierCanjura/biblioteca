<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\AutorController;

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


Route::get('/hello', function () {
    return "Hola Mundo";
});

Route::get('/hello/en', function () {
    return "Hello World";
});

Route::get('/hello/{name}', function ($name) {
    return "Hola $name";
});

Route::controller(EditorialController::class)->group( function (){
    Route::get('/editoriales/index', 'index')->name('editorial.index');
    Route::get('/editoriales/create', 'create')->name('editorial.create');
    Route::post('/editoriales', 'store')->name('editorial.store');
    Route::get('/editoriales/edit/{id}', 'edit')->name('editorial.edit');
    Route::put('/editoriales/{id}', 'update')->name('editorial.update');
    Route::delete('/editoriales/{id}', 'destroy')->name('editorial.delete');
});

Route::controller(AutorController::class)->group( function (){
    Route::get('/autores/index', 'index')->name('autor.index');
    Route::get('/autores/create', 'create')->name('autor.create');
    Route::post('/autores', 'store')->name('autor.store');
    Route::get('/autores/edit/{id}', 'edit')->name('autor.edit');
    Route::put('/autores/{id}', 'update')->name('autor.update');
    Route::delete('/autores/{id}', 'destroy')->name('autor.delete');
});

// Route::get('/editoriales/index', [EditorialController::class, 'index']);
// Route::get('/editoriales/create', [EditorialController::class, 'create']);
// Route::get('/editoriales/edit/{id}', [EditorialController::class, 'edit']);