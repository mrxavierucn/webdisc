<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AcademicoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\DocumentoController;
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

Route::get('programas',[ProgramaController::class,'index'])->name('programas');

Route::get('programas/create', [ProgramaController::class,'create'])->name('programas.create');

Route::get('programas/pregrado', [ProgramaController::class,'pregrado'])->name('programas.pregrado');

Route::get('programas/postgrado', [ProgramaController::class,'postgrado'])->name('programas.postgrado');

Route::get('programas/posttitulo', [ProgramaController::class,'posttitulo'])->name('programas.posttitulo');

Route::get('programas/pregrado/{pregrado}', [ProgramaController::class,'showPregrado'])->name('programas.showPregrado');

Route::get('programas/postgrado/{postgrado}', [ProgramaController::class,'showPostgrado'])->name('programas.showPostgrado');

Route::get('academicos', [AcademicoController::class,'index'])->name('academicos');

Route::get('academicos/permanente', [AcademicoController::class,'permanente'])->name('academicos.permanente');

Route::get('academicos/temporal', [AcademicoController::class,'temporal'])->name('academicos.temporal');

Route::get('academicos/apoyo', [AcademicoController::class,'apoyo'])->name('academicos.apoyo');

Route::get('documentos', [DocumentoController::class,'index'])->name('documentos');

Route::get('documentos/{documento}', [DocumentoController::class,'show'])->name('documentos.show');

Route::get('noticias', [NoticiaController::class,'index'])->name('noticias');

Route::get('noticias/create', [NoticiaController::class,'create'])->name('noticias.create');

Route::post('noticias', [NoticiaController::class,'store'])->name('noticias.store');

Route::get('noticias/{noticia}', [NoticiaController::class,'show'])->name('noticias.show');

Route::get('noticias/{noticia}/edit', [NoticiaController::class,'edit'])->name('noticias.edit');

Route::put('noticias/{noticia}',[NoticiaController::class,'update'])->name('noticias.update');

Route::delete('noticias/{noticia}',[NoticiaController::class,'destroy'])->name('noticias.destroy');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
