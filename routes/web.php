<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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

Route::get('/','EstudianteController@lista');
Route::get('/form','EstudianteController@estuform');
Route::post('/save','EstudianteController@save')->name('save');
Route::delete('/delete/{id}','EstudianteController@delete')->name('delete');
