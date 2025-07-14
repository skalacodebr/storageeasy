<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    public $timestamps = false;
    
    protected $table = 'usuarios';
    
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'sou_loja',
        'cpf',
        'telefone',
        'leu_termos',
        'quer_cupons',
        'endereco',
        'imagem_usuario',
        'token',
        'vendedor',
        'admin',
        'total_lojas',
        'status',
        'quantidade_lojas_permitidas'
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}