<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',HomeController::class);

Route::get('cursos',[CursoController::class,'inicio']);

//Route::get('cursos',[CursoController::class,'index']);

Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');

Route::get('cursos/create',[CursoController::class,'create']);

Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');

Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.update');

Route::get('curso/{curso}/editar',[CursoController::class,'show'])->name('curso.edit');



//Route::get('cursos/{curso}',[CursoController::class,'Show']);

