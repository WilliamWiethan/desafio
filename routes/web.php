<?php

use App\Http\Controllers\AssociadosController;
use App\Http\Controllers\ContasController;
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

Route::prefix('associados')->group(function () {

    Route::prefix('/{associado_id}/contas')->group(function () {
        Route::get('/', [AssociadosController::class, 'contasAssociado'])->name('associado.contasAssociado');
        Route::get('/new', [ContasController::class, 'new'])->name('contas.new');
        Route::get('/{conta}', [ContasController::class, 'show'])->name('contas.show');
        Route::post('/', [ContasController::class, 'store'])->name('contas.store');
        Route::get('/edit/{conta}', [ContasController::class, 'edit'])->name('contas.edit');
        Route::post('/update/{conta}', [ContasController::class, 'update'])->name('contas.update');
        Route::get('/delete/{conta}', [ContasController::class, 'delete'])->name('contas.delete');
    });

    Route::get('/', [AssociadosController::class, 'index'])->name('associados.index');
    Route::get('/new', [AssociadosController::class, 'new'])->name('associados.new');
    Route::get('/{id}', [AssociadosController::class, 'show'])->name('associados.show');
    Route::post('/', [AssociadosController::class, 'store'])->name('associados.store');
    Route::get('/edit/{associado}', [AssociadosController::class, 'edit'])->name('associados.edit');
    Route::post('/update/{id}', [AssociadosController::class, 'update'])->name('associados.update');
    Route::get('/delete/{id}', [AssociadosController::class, 'delete'])->name('associados.delete');
});


Route::prefix('contas')->group(function () {
    Route::get('/import-form', [ContasController::class, 'importForm'])->name('contas.importForm');
    Route::post('/import', [ContasController::class, 'import'])->name('contas.import');
});
