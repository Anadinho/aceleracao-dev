<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{DocumentoController, AssinaturaController, LoginApiController,RelatorioDeAnaliseController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::namespace('App\Http\Controllers\Api')->group(function(){

    Route::post('/login', 'LoginApiController@login')->name('login');
    Route::get('/logout', 'LoginApiController@logout')->name('logout');
    Route::get('/refresh', 'LoginApiController@refresh')->name('refresh');


    Route::prefix('documentos')->group(function(){
        Route::get('/', 'DocumentoController@listarDocumentos');
        Route::post('/novo', 'DocumentoController@insereDocumento');
        Route::get('/{id}', 'DocumentoController@listarDocumento');
        Route::put('/{id}', 'DocumentoController@editarDocumento');
        Route::delete('/{id}', 'DocumentoController@deletarDocumento');
    });

    Route::apiResource('/assinaturas', 'AssinaturaController');
    Route::apiResource('/analises', 'AnaliseController');
    Route::apiResource('/relatorios', 'RelatorioDeAnaliseController');
       
});








    
  
    


