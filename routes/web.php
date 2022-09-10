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
    return view('contenido/contenido');
});

//rutas para usar en Paciente.vue
Route::get('/pacientes','PacienteController@index');
Route::post('/paciente/registrar','PacienteController@store');
Route::put('/paciente/actualizar','PacienteController@update');

//rutas para usar en Categoria.vue
Route::get('/categorias','CategoriaController@index');
Route::post('/categorias/registrar','CategoriaController@store');
Route::put('/categorias/actualizar','CategoriaController@update');

//rutas para usar en Subcategoria.vue
Route::get('/subcategorias','SubcategoriaController@index');
Route::post('/subcategorias/registrar','SubcategoriaController@store');
Route::put('/subcategoria/actualizar','SubcategoriaController@update');
Route::get('/listadodeCategoria','SubcategoriaController@listadeCategoria');