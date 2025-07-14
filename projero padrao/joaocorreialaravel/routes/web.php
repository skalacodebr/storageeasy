<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AsistenteController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FinancasController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\OrcamentosController;
use App\Http\Controllers\ContratosController;
use App\Http\Controllers\AguardandoController;
use App\Http\Controllers\VeiculosController;

// AUTH
Route::get('/', [AuthController::class, 'index'])->name('login');

// DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// CLIENTES
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes'); 
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create'); 
Route::get('/clientes/edite/{id}', [ClientesController::class, 'edite'])->name('clientes.edite'); 
Route::get('/clientes/view/{id}', [ClientesController::class, 'view'])->name('clientes.view');
Route::get('/clientes/formularios/{token}', [ClientesController::class, 'formularios'])->name('clientes.formularios');
Route::post('/clientes/delete/{id}', [ClientesController::class, 'delete'])->name('clientes.delete'); 

// AGENDA
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda'); 
Route::get('/agenda/create', [AgendaController::class, 'create'])->name('agenda.create'); 
Route::get('/agenda/edite/{id}', [AgendaController::class, 'edite'])->name('agenda.edite'); 
Route::get('/agenda/view/{id}', [AgendaController::class, 'view'])->name('agenda.view'); 
Route::post('/agenda/delete/{id}', [AgendaController::class, 'delete'])->name('agenda.delete');

// ASSISTENTE
Route::get('/asistente', [AsistenteController::class, 'index'])->name('asistente.index'); 

// EQUIPE
Route::get('/equipe', [EquipeController::class, 'index'])->name('equipe.index'); 
Route::get('/equipe/create', [EquipeController::class, 'create'])->name('equipe.create'); 
Route::post('/equipe/store', [EquipeController::class, 'store'])->name('equipe.store'); 
Route::get('/equipe/data', [EquipeController::class, 'getData'])->name('equipe.data');
Route::get('/equipe/edite/{id}', [EquipeController::class, 'edite'])->name('equipe.edite'); 
Route::get('/equipe/view/{id}', [EquipeController::class, 'view'])->name('equipe.view'); 
Route::post('/equipe/delete/{id}', [EquipeController::class, 'delete'])->name('equipe.delete');

// FORNECEDOR
Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('fornecedor.index'); 
Route::get('/fornecedor/create', [FornecedorController::class, 'create'])->name('fornecedor.create'); 
Route::get('/fornecedor/edite/{id}', [FornecedorController::class, 'edite'])->name('fornecedor.edite'); 
Route::get('/fornecedor/view/{id}', [FornecedorController::class, 'view'])->name('fornecedor.view'); 
Route::post('/fornecedor/delete/{id}', [FornecedorController::class, 'delete'])->name('fornecedor.delete');

// PRODUTOS
Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index'); 
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create'); 
Route::get('/produtos/edite/{id}', [ProdutosController::class, 'edite'])->name('produtos.edite'); 
Route::get('/produtos/view/{id}', [ProdutosController::class, 'view'])->name('produtos.view'); 
Route::post('/produtos/delete/{id}', [ProdutosController::class, 'delete'])->name('produtos.delete');

// FINANÇAS
Route::get('/financas', [FinancasController::class, 'index'])->name('financas.index'); 
Route::get('/financas/create', [FinancasController::class, 'create'])->name('financas.create'); 
Route::get('/financas/edite/{id}', [FinancasController::class, 'edite'])->name('financas.edite'); 
Route::get('/financas/view/{id}', [FinancasController::class, 'view'])->name('financas.view'); 
Route::post('/financas/delete/{id}', [FinancasController::class, 'delete'])->name('financas.delete');

// TAREFA
Route::get('/tarefas', [TarefasController::class, 'index'])->name('tarefas.index'); 
Route::get('/tarefas/create', [TarefasController::class, 'create'])->name('tarefas.create'); 
Route::get('/tarefas/edite/{id}', [TarefasController::class, 'edite'])->name('tarefas.edite'); 
Route::get('/tarefas/view/{id}', [TarefasController::class, 'view'])->name('tarefas.view'); 
Route::post('/tarefas/delete/{id}', [TarefasController::class, 'delete'])->name('tarefas.delete');

// CHECKLIST
Route::get('/checklist', [ChecklistController::class, 'index'])->name('checklist.index'); 
Route::get('/checklist/create', [ChecklistController::class, 'create'])->name('checklist.create'); 
Route::get('/checklist/edite/{id}', [ChecklistController::class, 'edite'])->name('checklist.edite'); 
Route::get('/checklist/view/{id}', [ChecklistController::class, 'view'])->name('checklist.view'); 
Route::post('/checklist/delete/{id}', [ChecklistController::class, 'delete'])->name('checklist.delete');

// ORÇAMENTOS
Route::get('/orcamentos', [OrcamentosController::class, 'index'])->name('orcamentos.index'); 
Route::post('/orcamentos/delete/{id}', [OrcamentosController::class, 'delete'])->name('orcamentos.delete');

// CONTRATOS
Route::get('/contratos', [ContratosController::class, 'index'])->name('contratos.index'); 
Route::get('/contratos/view/{id}', [ContratosController::class, 'view'])->name('contratos.view'); 
Route::get('/contratos/assinar/{id}/{token}', [ContratosController::class, 'assinar'])->name('contratos.assinar');
Route::post('/contratos/delete/{id}', [ContratosController::class, 'delete'])->name('contratos.delete');

// AGUARDANDO
Route::get('/aguardando', [AguardandoController::class, 'index'])->name('aguardando.index'); 
Route::get('/aguardando/create', [AguardandoController::class, 'create'])->name('aguardando.create'); 
Route::get('/aguardando/edite/{id}', [AguardandoController::class, 'edite'])->name('aguardando.edite'); 
Route::get('/aguardando/view/{id}', [AguardandoController::class, 'view'])->name('aguardando.view'); 
Route::post('/aguardando/delete/{id}', [AguardandoController::class, 'delete'])->name('aguardando.delete');

// VEÍCULOS
Route::get('/veiculos', [VeiculosController::class, 'index'])->name('veiculos.index'); 
Route::get('/veiculos/create', [VeiculosController::class, 'create'])->name('veiculos.create'); 
Route::get('/veiculos/edite/{id}', [VeiculosController::class, 'edite'])->name('veiculos.edite'); 
Route::get('/veiculos/view/{id}', [VeiculosController::class, 'view'])->name('veiculos.view'); 
Route::post('/veiculos/delete/{id}', [VeiculosController::class, 'delete'])->name('veiculos.delete');