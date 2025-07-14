<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidosController;

/*
|--------------------------------------------------------------------------
| Rotas para gerenciamento de pedidos
|--------------------------------------------------------------------------
|
| Aqui estão todas as rotas relacionadas ao gerenciamento de pedidos
| no sistema. Isso inclui listagem, visualização, cancelamento e 
| manipulação de produtos.
|
*/

// Rotas para pedidos
Route::middleware(['web'])->group(function () {
    // Listagem e visualização de pedidos
    Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');
    Route::get('/pedidos/{codigo}', [PedidosController::class, 'show'])->name('pedidos.show');
    Route::get('/pedidos/{codigo}/cancelar', [PedidosController::class, 'cancelarPedido'])->name('pedidos.cancelar');
    
    // Ações AJAX para manipulação de produtos/pedidos
    Route::post('/pedidos/remover-produto', [PedidosController::class, 'removerProduto'])->name('pedidos.removerProduto');
    Route::post('/pedidos/editar-produto', [PedidosController::class, 'editarProduto'])->name('pedidos.editarProduto');
    Route::post('/pedidos/atualizar-endereco', [PedidosController::class, 'atualizarEndereco'])->name('pedidos.atualizarEndereco');
    
    // Status dos pedidos
    Route::get('/pedidos/status', [PedidosController::class, 'status'])->name('pedidos.status');
});
