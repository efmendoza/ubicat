<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->to('admin/usuarios/login');

});


//Grupo de rutas para registrar usuarios por roles
    
Route::group( ['prefix' => 'admin'], function(){

Route::resource('users', 'UsersController');
Route::get('users/{id}/destroy',[
            'uses' => 'UsersController@destroy',
            'as' => 'admin.users.destroy'

]);

});

//grupo de rutas de los cursos

Route::group( ['prefix' => 'admin'], function(){
Route::resource('cursos', 'CursosController');

});

//Grupo de rutas para los docentes

Route::group( ['prefix' => 'admin'], function(){
Route::resource('docentes', 'DocentesController');


});

//Grupo de rutas para Estudiantes

Route::group( ['prefix' => 'admin'], function(){
Route::resource('estudiantes', 'EstudiantesController');

});

//Grupo de rutas para los Salones

Route::group( ['prefix' => 'admin'], function(){
Route::resource('salones', 'SalonesController');


});

//Grupo de rutas para las sedes

Route::group( ['prefix' => 'admin'], function(){
Route::resource('sedes', 'SedesController');

});
Route::group( ['prefix' => 'admin'], function() {
    Route::resource('login', 'Auth\AuthController');
});
Route::get('admin/mapa/ubicacion/{id}','MapasController@ruta');
Route::get('admin/mapa/ubicacion','MapasController@index');

Route::get('admin/usuarios/login','UsuariosController@index');
Route::post('admin/usuarios/login','UsuariosController@verificar');
Route::get('admin/usuarios/usuario','UsuariosController@show');
Route::get('admin/mapa/ubicacion/sede/{id}','MapasController@show');
Route::post('admin/login','AuthController@verificar');


Route::get('admin/template/plantilla/login','UsersController@index');
Route::post('admin/template/plantilla/login','UsersController@verificar');


