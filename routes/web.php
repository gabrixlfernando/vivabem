<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/sobre',[SobreController::class, 'index'])->name('sobre');
Route::get('/modalidade',[ModalidadeController::class, 'index'])->name('modalidade');
Route::get('/modalidade/musculacao',[ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');
Route::get('/modalidade/yoga',[ModalidadeController::class, 'yoga'])->name('modalidade.yoga');
Route::get('/modalidade/boxe',[ModalidadeController::class, 'boxe'])->name('modalidade.boxe');
Route::get('/modalidade/pilates',[ModalidadeController::class, 'pilates'])->name('modalidade.pilates');
Route::get('/noticia', [NoticiasController::class, 'index'])->name('noticia');
Route::get('/treino', [TreinoController::class, 'index'])->name('treino');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('login');


Route::get('/dashboard/alunos', [AlunoController::class, 'index'])->name('dashboard.alunos');
Route::get('/dashboard/administrativo', [AdministrativoController::class, 'index'])->name('dashboard.administrativo');
Route::get('/dashboard/instrutor', [InstrutorController::class, 'index'])->name('dashboard.instrutor');



Route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
Route::post('/contato/enviarnew', [ContatoController::class, 'salvarEmail'])->name('contato.enviarnew');

