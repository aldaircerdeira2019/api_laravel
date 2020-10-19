<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Api\Ator;
use Illuminate\Support\Facades\Validator;
class AtorController extends Controller
{
    private $ator;
    public function __construct(Ator $ator)
    {
        $this->ator = $ator;
    }
    public function index()
    {
        try {
            $atores = $this->ator->orderBy('id', 'desc')->paginate(15);
            return response()->json(compact('atores'),200);
        }
        catch (\Exception $e) 
        {
            $erro = $e->getMessage();
            return response()->json(compact('erro'),500);
        }
    }
    public function show($id)
    {
      
        $ator = $this->ator->find($id);
        if(is_null($ator)){
            return response()->json('não encontrado',404);
        }
        return response()->json(compact('ator'),200);
        
    }

    public function store(Request $request)
    {
        try {
            $rules = [
                'name_ator'         =>  'required|min:10',
                'data_nascimento'   =>  'required|date_format:"Y-m-d"' ,
                'sexo'              =>  "required|max:1",
                'email'             =>  "required|unique:ators",
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()]);
                /* return response()->json(['errors' => $validator->errors()],400); */
            }
            $create_ator = $this->ator->create($request->all());
            return response()->json(compact('create_ator'),201);
        }
        catch (\Exception $e) 
        {
            $erro = $e->getMessage();
            return response()->json(compact('erro'),500);
        }
    }
    public function update($id, Request $request)
    {
        $ator= $this->ator->find($id);
         if(is_null($ator)){
            return response()->json('não encontrado',404);
        }
        $rules = [
            'name_ator'         =>  'required|min:10',
            'data_nascimento'   =>  'required|date_format:"Y-m-d"' ,
            'sexo'              =>  "required|max:1",
            'email'             =>  "required|unique:ators,email,{$id},id",
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()],400);
        }
         $ator->update($request->all());
         return response()->json(compact('ator'),200);
    }
    public function destroy($id)
    {
        try {
            $ator= $this->ator->find($id);
            if(is_null($ator)){
                return response()->json(['erro' =>'não encontrado']);
               /*  return response()->json('não encontrado',404); */
            }
            $ator->delete();
            return response()->json(compact('ator'));
            /* return response()->json(compact('ator'),204); */
        }
        catch (\Exception $e) 
        {
            $erro = $e->getMessage();
            return response()->json(compact('erro'),500);
        }
    }
}
