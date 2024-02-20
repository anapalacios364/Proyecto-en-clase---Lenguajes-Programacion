<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectosController;

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'ProyectosController@edit');
Route::post('/store', 'ProyectosController@store')->name('proyecto.store');
Route::post('/index', 'ProyectosController@index')->name('proyecto.index');

