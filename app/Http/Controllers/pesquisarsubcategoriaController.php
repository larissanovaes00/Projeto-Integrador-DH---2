<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\pagsController;
use App\Http\Controllers\SubcategoriaController;

class pesquisarsubcategoriaController extends Controller
{
    public function index($id)
    {

        // Navegacao
        $navegacao = new SubcategoriaController();
        $categorias = $navegacao->getCategorias();

        // Query de produtos
        $produtos = new pagsController();
        $pagProdutos = $produtos->pesquisarSubcategoria($id);
        
        return view('produtosporsubcategoria')
            ->with('navbar', $categorias)
            ->with('produtos', $pagProdutos);
    }
}
