<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Ativa created_at e updated_at automaticamente
    public $timestamps = true;

    // Aponta para a tabela correta
    protected $table = 'users';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome_completo',
        'email',
        'telefone',
        'password',               // passe a usar "password"
        
        // se esses campos existirem mesmo na sua tabela, mantenha-os:
        'sou_loja',
        'cpf',
        'leu_termos',
        'quer_cupons',
        'endereco',
        'imagem_usuario',
        'token',
        'vendedor',
        'admin',
        'total_lojas',
        'status',
        'quantidade_lojas_permitidas',
    ];

    // Campos ocultos nas serializações (JSON, arrays etc)
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casts para datas, booleans etc
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
