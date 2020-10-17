<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    protected $fillable = [
        'name_diretor','data_nascimento','sexo','email',
    ];
}
