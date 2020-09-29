<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LojaController extends Controller
{
    public function index(Request $request, Produto $produtos)
    {
        $produtos = DB::table('produto')
        ->where('ativo', 1)
        ->where('quantidade', '>', 0)
        ->get();
        return view ('site.loja.index', compact('produtos'));
    }
}