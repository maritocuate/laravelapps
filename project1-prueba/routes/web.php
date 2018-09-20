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

Route::get('/hola-mundo', function(){
	return 'hola mundo soy martio';
});

Route::get('/contacto/{nombre?}', function($nombre = 'marito'){
	return view('contacto.contacto')
		->with('nombre', $nombre)
		->with('frutas', array('naranja', 'pera', 'sandia'));
})->where([
	'nombre' => '[A-Za-z]'
]);



Route::group(['prefix' => 'fruteria'], function(){
	Route::get('/frutas', 'FrutasController@index');
	Route::get('/naranjas/{admin?}', [ 'middleware' => 'EsAdmin',
									   'uses' => 'FrutasController@getNaranjas',
									   'as' => 'naranjitas'
									  ]);
	Route::get('/peras', 'FrutasController@getPeras');
});

Route::post('/recibir', 'FrutasController@recibirFormulario');








