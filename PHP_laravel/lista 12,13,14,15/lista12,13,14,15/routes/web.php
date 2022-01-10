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
Route::get('/documento/criar', [DocumentoController::class, 'criarDocumento'])->name('documento.criar');
Route::get('/documentos', [DocumentoController::class, 'listarDocumentos'])->name('documentos.listar');
Route::get('/documento/{id}', [DocumentoController::class, 'listarDocumento'])->name('documento.listar');
Route::post('/documento/novo', [DocumentoController::class, 'store'])->name('documento.store');
Route::delete('/documento/remover/{id}', [DocumentoController::class, 'deletarDocumento'])->middleware('validaPermissao')->name('documento.deletar');

Route::get('/assinaturas', [AssinaturaController::class, 'listarAssinaturas'])->name('assinaturas.listar');
Route::get('/assinaturas/{id}', [AssinaturaController::class, 'listarAssinatura'])->name('assinatura.listar');
Route::get('/assinatura/criar', [AssinaturaController::class, 'criarAssinatura'])->name('assinaturas.criar');
Route::post('/assinaturas/novo', [AssinaturaController::class, 'store'])->name('assinatura.store');
Route::delete('/assinatura/remover/{id}', [AssinaturaController::class, 'deletarAssinatura'])->name('assinatura.deletar');

Route::get('/login', [DocumentoController::class, 'login'])->name('documento.login');
Route::get('/logout', [DocumentoController::class, 'logout'])->name('documento.logout');
