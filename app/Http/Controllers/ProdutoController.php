<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        return view ('site.produto.default');
    }

    public function formCadastrar(Request $request)
    {
        return view ('site.produto.create');
    }

    public function show(Request $request)
    {
        $produtos = Produto::all();
        return view('site.produto.show', compact('produtos'));
    }

    public function edit(Request $request, $id)
    {
        $produto = DB::table('produto')->where('id', $id)->get();
        return view('site.produto.edit', compact('produto'));
    }
// API
    public function create(Request $request, produto $produto)
    {
        try{
            $validate = $this->validate($request, [
                'nome' => 'bail|required|max:255',
                'codigo' => 'required|max:11',
                'quantidade' => 'required|max:60',
                'preco' => 'required|max:16',
                'descricao' => 'required|max:255'
            ]);   
            
            $produto->create($request->all());

            return response()->json(['message'=> 'Produto realizado com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['message'=> $e->getMessage()], 404);
        }
    }

    public function update(Request $request, $id_produto)
    {
        try{
            $validate = $this->validate($request, [
                'nome' => 'bail|required|max:255',
                'codigo' => 'required|max:11',
                'quantidade' => 'required|max:60',
                'preco' => 'required|max:16',
                'descricao' => 'required|max:255',
                'ativo' => 'required'
            ]); 

            DB::table('produto')
            ->where('id', $id_produto)
            ->update($request->all());
            
            return response()->json(['message'=> 'Produto atualizadado com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['message'=> $e->getMessage()], 404);
        }
    }

    public function delete(Request $request, $id)
    {
        try{
            DB::table('produto')
            ->where('id', $id)->delete();
            return response()->json(['message'=> 'Produto apagado com sucesso'], 200);
        } catch (\Exception $e){
            return response()->json(['message'=> $e->getMessage()], 404);
        }
    }
}
