<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AsistenteController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\BoxesController;
use App\Http\Controllers\UnidadesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContasPagarController;
use App\Http\Controllers\EntradaLocacaoController;
use App\Http\Controllers\SaidaLocacaoController;
use App\Http\Controllers\TransferenciaBoxesController;
use App\Http\Controllers\RelatoriosController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ContratosController;
use App\Http\Controllers\NotificacoesController;

// AUTH
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register.index');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');



Route::group(['middleware' => 'auth'], function () {
    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // MAPA
    Route::get('/mapa', [MapaController::class, 'index'])->name('mapa.index');

    // LEADS
    Route::get('/leads', [LeadsController::class, 'index'])->name('leads.index');
    Route::get('/leads/atividades', [LeadsController::class, 'atividades'])->name('leads.atividades');
    Route::get('/leads/calendario', [LeadsController::class, 'calendario'])->name('leads.calendario');
    Route::get('/leads/campanhas', [LeadsController::class, 'campanhas'])->name('leads.campanhas');
    Route::get('/leads/dashboard', [LeadsController::class, 'dashboard'])->name('leads.dashboard');

    // PRODUTOS
    Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');

    // BOXES
    Route::get('/boxes', [BoxesController::class, 'index'])->name('boxes.index');

    // UNIDADES
    Route::get('/unidades', [UnidadesController::class, 'index'])->name('unidades.index');

    // CLIENTES
    Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');

    Route::get('/contas-pagar', [ContasPagarController::class, 'index'])->name('contas-pagar.index');

    // ENTRADA DE LOCAÇÃO
    Route::get('/entrada-locacao', [EntradaLocacaoController::class, 'index'])->name('entrada-locacao.index');

    // SAÍDA DE LOCAÇÃO
    Route::get('/saida-locacao', [SaidaLocacaoController::class, 'index'])->name('saida-locacao.index');

    Route::get('/transferencia-boxes', [TransferenciaBoxesController::class, 'index'])->name('transferencia-boxes.index');

    Route::get('/relatorios', [RelatoriosController::class, 'index'])->name('relatorios.index');

    Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil.index');

    Route::get('/notificacoes', [NotificacoesController::class, 'index'])->name('notificacoes.index');

    // CONTRATOS
    Route::get('/contratos', [ContratosController::class, 'index'])->name('contratos.index');

    // ASSISTENTE
    Route::get('/asistente', [AsistenteController::class, 'index'])->name('asistente.index');
});

