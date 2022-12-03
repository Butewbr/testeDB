<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = [
        'nome',
        'email',
        'cpf_cnpj',
        'telefone',
        'tipo',
    ];

    /***************************************
     *          RELACIONAMENTOS            *
     ***************************************/

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
