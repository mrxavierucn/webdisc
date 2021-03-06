<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AcademicoController;
use App\Http\Controllers\NoticiaController;
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

Route::get('historia',[HomeController::class,'historia'])->name('historia');

//programas

Route::get('programas',[ProgramaController::class,'index'])->name('programas');

//pregrado

Route::get('programas/pregrado', [ProgramaController::class,'pregrado'])->name('programas.pregrado');

Route::get('programas/pregrado/create', [ProgramaController::class,'createPregrado'])->name('programas.createPregrado');

Route::post('programas/pregrado', [ProgramaController::class,'storePregrado'])->name('programas.storePregrado');

Route::get('programas/pregrado/{pregrado}', [ProgramaController::class,'showPregrado'])->name('programas.showPregrado');

Route::get('programas/pregrado/{pregrado}/edit', [ProgramaController::class,'editPregrado'])->name('programas.editPregrado');

Route::put('programas/pregrado/{pregrado}', [ProgramaController::class,'updatePregrado'])->name('programas.updatePregrado');

Route::delete('programas/pregrado/{pregrado}', [ProgramaController::class,'destroyPregrado'])->name('programas.destroyPregrado');

//postgrado

Route::get('programas/postgrado', [ProgramaController::class,'postgrado'])->name('programas.postgrado');

Route::get('programas/postgrado/create', [ProgramaController::class,'createPostgrado'])->name('programas.createPostgrado');

Route::post('programas/postgrado', [ProgramaController::class,'storePostgrado'])->name('programas.storePostgrado');

Route::get('programas/postgrado/{postgrado}', [ProgramaController::class,'showPostgrado'])->name('programas.showPostgrado');

Route::get('programas/postgrado/{postgrado}/edit', [ProgramaController::class,'editPostgrado'])->name('programas.editPostgrado');

Route::put('programas/postgrado/{postgrado}', [ProgramaController::class,'updatePostgrado'])->name('programas.updatePostgrado');

Route::delete('programas/postgrado/{postgrado}', [ProgramaController::class,'destroyPostgrado'])->name('programas.destroyPostgrado');

//posttitulo

Route::get('programas/posttitulo', [ProgramaController::class,'posttitulo'])->name('programas.posttitulo');

Route::get('programas/posttitulo/create', [ProgramaController::class,'createPosttitulo'])->name('programas.createPosttitulo');

Route::post('programas/posttitulo', [ProgramaController::class,'storePosttitulo'])->name('programas.storePosttitulo');

Route::get('programas/posttitulo/{posttitulo}', [ProgramaController::class,'showPosttitulo'])->name('programas.showPosttitulo');

Route::get('programas/posttitulo/{posttitulo}/edit', [ProgramaController::class,'editPosttitulo'])->name('programas.editPosttitulo');

Route::put('programas/posttitulo/{posttitulo}', [ProgramaController::class,'updatePosttitulo'])->name('programas.updatePosttitulo');

Route::delete('programas/posttitulo/{posttitulo}', [ProgramaController::class,'destroyPosttitulo'])->name('programas.destroyPosttitulo');

//academicos

Route::get('academicos', [AcademicoController::class,'index'])->name('academicos');

Route::get('academicos/create', [AcademicoController::class,'create'])->name('academicos.create');

Route::post('academicos', [AcademicoController::class,'store'])->name('academicos.store');

Route::get('academicos/oficial', [AcademicoController::class,'oficial'])->name('academicos.oficial');

Route::get('academicos/especial', [AcademicoController::class,'especial'])->name('academicos.especial');

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

Route::get('documentos/reglamento', [DocumentoController::class,'reglamento'])->name('documentos.reglamento');

Route::get('documentos/libro', [DocumentoController::class,'libro'])->name('documentos.libro');

Route::get('documentos/titulacion', [DocumentoController::class,'titulacion'])->name('documentos.titulacion');

Route::get('documentos/practica', [DocumentoController::class,'practica'])->name('documentos.practica');

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
    return view('home');
})->name('dashboard');

Route::middleware('auth')->get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])->middleware(['auth']);

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
