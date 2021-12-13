<?php
use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/perfil', [UsuarioController::class, 'listarUsuario'])->name('listarUsuario');

Route::get('/documentos', [DocumentoController::class, 'listarDocumentos'])->name('documentos.listar');
Route::get('/documento/{id}', [DocumentoController::class, 'listarDocumento'])->name('documento.listar');

Route::get('/assinaturas', [AssinaturaController::class, 'listarAssinaturas'])->name('assinaturas.listar');
Route::get('/assinaturas/{id}', [AssinaturaController::class, 'listarAssinatura'])->name('assinatura.listar');
