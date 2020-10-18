<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Api\Diretor;
use Illuminate\Support\Facades\Validator;

class DiretorController extends Controller
{
    private $diretor;
    public function __construct(Diretor $diretor)
    {
        $this->diretor = $diretor;
    }
    public function index()
    {
        try {
            $diretores = $this->diretor->paginate(20);
            return response()->json(compact('diretores'));
        } catch (\Exception $e) {
            $erro = $e->getMessage();
            return response()->json(compact('erro'));
        }
    }
    public function show($id)
    {
        $diretor = $this->diretor->find($id);
        if(is_null($diretor)){
            return response()->json('não encontrado',404);
        }
        return response()->json(compact('diretor'),200);
    }
    public function store(Request $request)
    {
        try {
            $rules = [
                'name_diretor'      =>  'required|min:10',
                'data_nascimento'   =>  'required|date_format:"Y-m-d"' ,
                'sexo'              =>  "required|max:1",
                'email'             =>  "required|unique:diretors",
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()],400);
            }
            $create_diretor = $this->diretor->create($request->all());
            return response()->json(compact('create_diretor'),201);
        }
        catch (\Exception $e) 
        {
            $erro = $e->getMessage();
            return response()->json(compact('erro'),500);
        }
    }
    public function update($id, Request $request)
    {
        $diretor= $this->diretor->find($id);
         if(is_null($diretor)){
            return response()->json('não encontrado',404);
        }
        $rules = [
            'name_diretor'         =>  'required|min:10',
            'data_nascimento'   =>  'required|date_format:"Y-m-d"' ,
            'sexo'              =>  "required|max:1",
            'email'             =>  "required|unique:diretors,email,{$id},id",
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()],400);
        }
         $diretor->update($request->all());
         return response()->json(compact('diretor'),200);
    }
    public function destroy($id)
    {
        try {
            $diretor= $this->diretor->find($id);
            if(is_null($diretor)){
                return response()->json('não encontrado',404);
            }
            $diretor->delete();
            return response()->json(compact('diretor'),204);
        }
        catch (\Exception $e) 
        {
            $erro = $e->getMessage();
            return response()->json(compact('erro'),500);
        }
    }
}
