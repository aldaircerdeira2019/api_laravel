<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Api\Filme;
use Illuminate\Support\Facades\Validator;

class FilmeController extends Controller
{
    private $filme;
    public function __construct(Filme $filme){
        $this->filme = $filme;
    }
    public function index()
    {
        try {
            $filmes = $this->filme->paginate(20);
            return response()->json(compact('filmes'));
        } catch (\Exception $e) {
            $erro = $e->getMessage();
            return response()->json(compact('erro'));
        }
    }
    public function show($id)
    {
        $filme = $this->filme->find($id);
        if(is_null($filme)){
            return response()->json('não encontrado',404);
        }
        return response()->json(compact('filme'),200);
    }
    public function store(Request $request)
    {
        try {
            $rules = [
                "categoria_id"  =>  'required',
                "diretor_id"    =>   'required',
                "name_filme"    =>   'required|min:10',
                "data_estreia"  =>  'required|date_format:"Y-m-d"' ,
                "descricao"     =>   'required|min:100|max:600',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()],400);
            }
            $create_filme = $this->filme->create($request->all());
            return response()->json(compact('create_filme'),201);
        }
        catch (\Exception $e) 
        {
            $erro = $e->getMessage();
            return response()->json(compact('erro'),500);
        }
    }
    public function update($id, Request $request)
    {
        $filme= $this->filme->find($id);
         if(is_null($filme)){
            return response()->json('não encontrado',404);
        }
        $rules = [
            "categoria_id"  =>  'required',
            "diretor_id"    =>   'required',
            "name_filme"    =>   'required|min:10',
            "data_estreia"  =>  'required|date_format:"Y-m-d"' ,
            "descricao"     =>   'required|min:100|max:600',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()],400);
        }
         $filme->update($request->all());
         return response()->json(compact('filme'),200);
    }
    public function destroy($id)
    {
        try {
            $filme= $this->filme->find($id);
            if(is_null($filme)){
                return response()->json('não encontrado',404);
            }
            $filme->delete();
            return response()->json(compact('filme'),204);
        }
        catch (\Exception $e) 
        {
            $erro = $e->getMessage();
            return response()->json(compact('erro'),500);
        }
    }
}
