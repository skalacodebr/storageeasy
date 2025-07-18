<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserInfo extends Authenticatable
{
    // Caso o nome da tabela seja diferente do padrão "user_infos"
    protected $table = 'users';

    // Defina os campos que podem ser preenchidos
    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'endereco',
        'email',
        'senha',
        'imagem_usuario',
        'admin',
        // adicione os demais campos necessários
    ];

    // Se necessário, configure outras propriedades ou relacionamentos...
}
