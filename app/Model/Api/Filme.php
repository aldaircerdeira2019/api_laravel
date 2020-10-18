<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = [
        'categoria_id','diretor_id','name_filme','data_estreia','descricao',
    ];

    public function consulta($id){

        $filme = $this->where('filmes.id',$id)
        ->join('categorias','categorias.id', '=', 'filmes.categoria_id')
        ->join('diretors','diretors.id', '=', 'filmes.diretor_id')
        ->select('diretors.name_diretor','categorias.name_categoria', 'filmes.*')
        ->first();
        return $filme;
    }
    public function atores()
    {
        return $this->belongsToMany('App\Model\Api\Ator', 'ator_filmes', 'filme_id', 'ator_id');
    
    }
}
