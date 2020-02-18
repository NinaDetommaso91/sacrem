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
Route::resource('/nivel', 'NivelController');
Route::resource('/niveus', 'NiveusController');
Route::resource('/ocupacion', 'OcupacionController');
Route::resource('/banco', 'BancoController');

Route::resource('/estadocivil', 'EstadocivilController');
Route::resource('/sangre', 'SangreController');
Route::resource('/estado', 'EstadoController');
Route::resource('/pais', 'paisController');
Route::resource('/nacionalidad', 'NacionalidadController');
Route::resource('/diocesis', 'DiocesiController');
Route::resource('/Asignacion', 'Model_has_rolesController');
Route::resource('/cd', 'OfficesController');
Route::resource('/municipio', 'MunicipioController');
Route::resource('/datos', 'DatosPController');
Route::resource('/datosE', 'DatosEcController');
Route::resource('/datosm', 'Datos_mController');
Route::resource('/datosA', 'DatosAController');
Route::resource('/datosI', 'DatosIController');

Route::resource('datoscd', 'CursodatoisController');

Route::get( 'estado/get_by_estado' , 'EstadosController@get_by_pais' ) -> name('estados.get_by_pais'); 

Route::get('/indonesia','CountryController@pais');
Route::get('/json-estado','CountryController@estado');
Route::get('/json-municipio', 'CountryController@municipio');
Route::get('notes', 'NotesController@index');
Route::get('menus/{id}/menu', 'NotesController@menu')->name('menus.menu');
Route::get('formulario', 'StorageController@index');
Route::post('storage/create', 'StorageController@save');





