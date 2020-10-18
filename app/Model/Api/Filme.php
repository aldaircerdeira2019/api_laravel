<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = [
        'categoria_id','diretor_id','name_filme','data_estreia','descricao',
    ];
}
