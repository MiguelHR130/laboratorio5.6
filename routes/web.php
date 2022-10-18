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
Route::group(['middleware'=>['guest']],function(){
    Route::get('/','Auth\LoginController@showLoginForm');
    Route::post('/login','Auth\LoginController@login')->name('login');
});

Route::group(['middleware'=>['auth']],function(){

    Route::post('/logout','Auth\LoginController@logout')->name('logout');

    Route::get('/main', function () {
        return view('contenido/contenido');
    })->name('main');

    Route::group(['middleware'=>['Administrador']],function(){
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

    //rutas para rol
    Route::get('/rol','RolController@index');
    Route::get('/rol/selectRol','RolController@selectrol');


    //rutas para user
    Route::get('/user','UserController@index');
    Route::post('/user/registrar','UserController@store');
    Route::put('/user/actualizar','UserController@update');

    //rutas para registro de solicitud
    Route::get('/listadosolicitud','SolicitudController@index');
    Route::get('/listadoPaciente','SolicitudController@listadoPaciente');
    Route::post('/solicitud/registrar','SolicitudController@store');
    Route::put('/solicitud/actualizar','SolicitudController@update');
    Route::get('solicitudpdf/{id}','SolicitudController@pdf');
    Route::post('solicitud/guardaresultados','SolicitudController@guardarResultado');
    Route::post('solicitud/guardarobservaciones','SolicitudController@guardarObservaciones');
    Route::get('/resultado/{id}','SolicitudController@resultado');
    Route::get('sobrepdf/{id}','SolicitudController@pdfsobre');

    //rutas para resultados
    Route::get('/listadoresultados','ResultadoController@index');

    //rutas para otros resultados
    Route::post('/otro/registrar','OtrosresultadosController@store');
    Route::get('/listadoOtros','OtrosresultadosController@index');
    Route::post('otro/guardarEncabezado','OtrosresultadosController@guardarEncabezado');    
    Route::post('otro/guardarCuerpo','OtrosresultadosController@guardarCuerpo');    
    Route::get('otropdf/{id}','OtrosresultadosController@pdf');
    }); 
   
    //Se crean los grupos de rutas para administrador dentro de el middleware auth
        Route::group(['middleware'=>['Quimica']],function(){
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
            
            //rutas para registro de solicitud
            Route::get('/listadosolicitud','SolicitudController@index');
            Route::get('/listadoPaciente','SolicitudController@listadoPaciente');
            Route::post('/solicitud/registrar','SolicitudController@store');
            Route::put('/solicitud/actualizar','SolicitudController@update');
            Route::get('solicitudpdf/{id}','SolicitudController@pdf');
            Route::post('solicitud/guardaresultados','SolicitudController@guardarResultado');
            Route::post('solicitud/guardarobservaciones','SolicitudController@guardarObservaciones');
            Route::get('/resultado/{id}','SolicitudController@resultado');
            Route::get('sobrepdf/{id}','SolicitudController@pdfsobre');
        }); 
        //Rutas para Doctor
        Route::group(['middleware'=>['Doctor']],function(){
            Route::get('/listadosolicitud','SolicitudController@index');
            Route::get('/listadoPaciente','SolicitudController@listadoPaciente');
            Route::get('solicitudpdf/{id}','SolicitudController@pdf');
            Route::get('/resultado/{id}','SolicitudController@resultado');
    });

}); 

    



    //Route::get('/home', 'HomeController@index')->name('home');