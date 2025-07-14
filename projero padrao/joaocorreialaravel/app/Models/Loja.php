<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use Illuminate\Foundation\Auth\Loja as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Loja extends Model
{
    use Notifiable;
    
    public $timestamps = false;
    
    protected $table = 'fornecedores_parceiros';
    
    protected $fillable = [
        'nome',
        'foto',
        'endereco_completo',
        'gestor_id'
    ];

    public function gestor()
    {
        return $this->belongsTo(User::class, 'gestor_id');
    }
    
}
