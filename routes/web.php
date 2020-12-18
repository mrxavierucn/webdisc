<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AcademicoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\InvestigacionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', HomeController::class)->name('home');

Route::get('historia',[HistoriaController::class,'index'])->name('historia');

//programas

Route::get('programas',[ProgramaController::class,'index'])->name('programas');

Route::get('programas/create', [ProgramaController::class,'create'])->name('programas.create');

Route::get('programas/pregrado', [ProgramaController::class,'pregrado'])->name('programas.pregrado');

Route::get('programas/postgrado', [ProgramaController::class,'postgrado'])->name('programas.postgrado');

Route::get('programas/posttitulo', [ProgramaController::class,'posttitulo'])->name('programas.posttitulo');

Route::get('programas/pregrado/{pregrado}', [ProgramaController::class,'showPregrado'])->name('programas.showPregrado');

Route::get('programas/postgrado/{postgrado}', [ProgramaController::class,'showPostgrado'])->name('programas.showPostgrado');

//academicos

Route::get('academicos', [AcademicoController::class,'index'])->name('academicos');

Route::get('academicos/create', [AcademicoController::class,'create'])->name('academicos.create');

Route::post('academicos', [AcademicoController::class,'store'])->name('academicos.store');

Route::get('academicos/permanente', [AcademicoController::class,'permanente'])->name('academicos.permanente');

Route::get('academicos/temporal', [AcademicoController::class,'temporal'])->name('academicos.temporal');

Route::get('academicos/apoyo', [AcademicoController::class,'apoyo'])->name('academicos.apoyo');

Route::get('academicos/{academico}', [AcademicoController::class,'show'])->name('academicos.show');

Route::get('academicos/{academico}/edit', [AcademicoController::class,'edit'])->name('academicos.edit');

Route::put('academicos/{academico}', [AcademicoController::class,'update'])->name('academicos.update');

Route::delete('academicos/{academico}', [AcademicoController::class,'destroy'])->name('academicos.destroy');

//documentos

Route::get('documentos', [DocumentoController::class,'index'])->name('documentos');

Route::get('documentos/create', [DocumentoController::class,'create'])->name('documentos.create');

Route::post('documentos', [DocumentoController::class,'store'])->name('documentos.store');

Route::get('documentos/reacreditacion', [DocumentoController::class,'reacreditacion'])->name('documentos.reacreditacion');

Route::get('documentos/plan', [DocumentoController::class,'plan'])->name('documentos.plan');

Route::get('documentos/otro', [DocumentoController::class,'otro'])->name('documentos.otro');

Route::get('documentos/{documento}', [DocumentoController::class,'show'])->name('documentos.show');

Route::get('documentos/{documento}/edit', [DocumentoController::class,'edit'])->name('documentos.edit');

Route::put('documentos/{documento}', [DocumentoController::class,'update'])->name('documentos.update');

Route::delete('documentos/{documento}', [DocumentoController::class,'destroy'])->name('documentos.destroy');

//noticias

Route::get('noticias', [NoticiaController::class,'index'])->name('noticias');

Route::get('noticias/create', [NoticiaController::class,'create'])->name('noticias.create');

Route::post('noticias', [NoticiaController::class,'store'])->name('noticias.store');

Route::get('noticias/{noticia}', [NoticiaController::class,'show'])->name('noticias.show');

Route::get('noticias/{noticia}/edit', [NoticiaController::class,'edit'])->name('noticias.edit');

Route::put('noticias/{noticia}',[NoticiaController::class,'update'])->name('noticias.update');

Route::delete('noticias/{noticia}',[NoticiaController::class,'destroy'])->name('noticias.destroy');

//investigacion

Route::get('investigacion',[InvestigacionController::class,'index'])->name('investigacion');

//proyectos

Route::get('investigacion/listaProyectos',[InvestigacionController::class,'listaProyectos'])->name('investigacion.listaProyectos');

Route::get('investigacion/listaProyectos/create', [InvestigacionController::class,'createProyecto'])->name('investigacion.createProyecto');

Route::post('investigacion/listaProyectos', [InvestigacionController::class,'storeProyecto'])->name('investigacion.storeProyecto');

Route::get('investigacion/listaProyectos/lista/{academico}',[InvestigacionController::class,'showProyectos'])->name('investigacion.showProyectos');

Route::get('investigacion/listaProyectos/{proyecto}',[InvestigacionController::class,'showProyecto'])->name('investigacion.showProyecto');

Route::get('investigacion/listaProyectos/{proyecto}/edit', [InvestigacionController::class,'editProyecto'])->name('investigacion.editProyecto');

Route::put('investigacion/listaProyectos/{proyecto}',[InvestigacionController::class,'updateProyecto'])->name('investigacion.updateProyecto');

Route::get('investigacion/listaProyectos/{proyecto}/editColaboradores', [InvestigacionController::class,'editColaboradoresProyecto'])->name('investigacion.editColaboradoresProyecto');

Route::put('investigacion/listaProyectos/{proyecto}/{academico}', [InvestigacionController::class,'updateColaboradoresProyecto'])->name('investigacion.updateColaboradoresProyecto');

Route::delete('investigacion/listaProyectos/{proyecto}',[InvestigacionController::class,'destroyProyecto'])->name('investigacion.destroyProyecto');

Route::delete('investigacion/listaProyectos/{academico}/{proyecto}',[InvestigacionController::class,'destroyColaboradoresProyecto'])->name('investigacion.destroyColaboradoresProyecto');

//publicaciones

Route::get('investigacion/listaPublicaciones',[InvestigacionController::class,'listaPublicaciones'])->name('investigacion.listaPublicaciones');

Route::get('investigacion/listaPublicaciones/create', [InvestigacionController::class,'createPublicacion'])->name('investigacion.createPublicacion');

Route::post('investigacion/listaPublicaciones', [InvestigacionController::class,'storePublicacion'])->name('investigacion.storePublicacion');

Route::get('investigacion/listaPublicaciones/lista/{academico}',[InvestigacionController::class,'showPublicaciones'])->name('investigacion.showPublicaciones');

Route::get('investigacion/listaPublicaciones/{publicacion}',[InvestigacionController::class,'showPublicacion'])->name('investigacion.showPublicacion');

Route::get('investigacion/listaPublicaciones/{publicacion}/edit', [InvestigacionController::class,'editPublicacion'])->name('investigacion.editPublicacion');

Route::put('investigacion/listaPublicaciones/{publicacion}',[InvestigacionController::class,'updatePublicacion'])->name('investigacion.updatePublicacion');

Route::get('investigacion/listaPublicaciones/{publicacion}/editColaboradores', [InvestigacionController::class,'editColaboradoresPublicacion'])->name('investigacion.editColaboradoresPublicacion');

Route::put('investigacion/listaPublicaciones/{publicacion}/{academico}', [InvestigacionController::class,'updateColaboradoresPublicacion'])->name('investigacion.updateColaboradoresPublicacion');

Route::delete('investigacion/listaPublicaciones/{publicacion}',[InvestigacionController::class,'destroyPublicacion'])->name('investigacion.destroyPublicacion');

Route::delete('investigacion/listaPublicaciones/{academico}/{publicacion}',[InvestigacionController::class,'destroyColaboradoresPublicacion'])->name('investigacion.destroyColaboradoresPublicacion');

//Administrador

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])->middleware(['auth']);

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
