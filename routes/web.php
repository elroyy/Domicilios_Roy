<?php

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

// Route::get('/', function () {
//     return view('main');
// });
Route::get('/', function () {
    return view('welcome');
});

// Route::get('pruebaxd', function () {
//     return view('index');
// });
// Route::get('clientes', 'ClienteController@index')->name('index');

Route::get('sucursals', 'SucursalsController@index')->name('sucursals');
Route::post('sucursals', 'SucursalsController@guardar')->name('sucu.guardar');

Route::get('modelos', 'ModeloController@index')->name('index');
Route::get('modelos/{id}', 'ModeloController@listar')->name('mode.listar');
Route::post('modelos', 'ModeloController@guardar')->name('mode.guardar');
Route::put('modelos/{id}', 'ModeloController@editar')->name('mode.editar');
Route::delete('modelos/{id}', 'ModeloController@eliminar')->name('mode.eliminar');

// Route::get('modelos/getmarca', 'MarcaController@getmarca');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');