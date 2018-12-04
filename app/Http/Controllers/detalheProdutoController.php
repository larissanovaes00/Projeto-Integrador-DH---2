<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\pagsController;
use App\Http\Controllers\SubcategoriaController;

class detalheProdutoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function detalheProduto($id)
    {
        // Navegacao
        $navegacao = new SubcategoriaController();
        $categorias = $navegacao->getCategorias();

        // Popular DESTAQUES
        $detalheproduto = new pagsController();
        $produto = $detalheproduto->detalheProduto($id);

        return view('detalhe-produto')
            ->with('navbar', $categorias)
            ->with('produto', $produto);
    }
}
