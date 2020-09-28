<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        return view ('site.cliente.create');
    }

    public function show(Request $request)
    {
        $clientes = Cliente::all();
        return view('site.cliente.show', compact('clientes'));
    }

    public function edit(Request $request, $id)
    {
        $cliente = DB::table('cliente')->where('id', $id)->get();
        return view('site.cliente.edit', compact('cliente'));
    }
// API
    public function create(Request $request, Cliente $cliente)
    {
        try{
            $validate = $this->validate($request, [
                'nome' => 'bail|required|max:255',
                'cpf' => 'required|unique:cliente|max:11',
                'email' => 'required|max:60',
                'senha' => 'required|max:16'
            ]);   
            
            $cliente->create($request->all());

            return response()->json(['message'=> 'Cadastro realizado com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['message'=> $e->getMessage()], 404);
        }
    }

    public function update(Request $request, $id_cliente)
    {
        try{
            $validate = $this->validate($request, [
                'nome' => 'bail|required|max:255',
                'cpf' => 'required|max:11|',
                'email' => 'required|max:60',
                'ativo' => 'required'
            ]); 

            DB::table('cliente')
            ->where('id', $id_cliente)
            ->update($request->all());
            
            return response()->json(['message'=> 'Cadastro atualizadado com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['message'=> $e->getMessage()], 404);
        }
    }

    public function delete(Request $request, $id)
    {
        try{
            DB::table('cliente')
            ->where('id', $id)->delete();
            return response()->json(['message'=> 'Cadastro apagado com sucesso'], 200);
        } catch (\Exception $e){
            return response()->json(['message'=> $e->getMessage()], 404);
        }
    }
}
