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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(
	function(){
    Route::view('/crearElectiva','dashboard.crearElectiva')->name('crearElectiva');
    Route::post('/registrarElectiva','admin\ElectivaController@create')->name('registrarElectiva');
		Route::get('/listarElectivas','admin\ElectivaController@listar')->name('listarElectivas');
		Route::get('/editarElectivas/{codigo}','admin\ElectivaController@edit')->name('editarElectiva');
		Route::put('/actualizarElectiva','admin\ElectivaController@update')->name('actualizarElectiva');
		Route::delete('/eliminarElectivas','admin\ElectivaController@delete')->name('eliminarElectiva');
	}
);
