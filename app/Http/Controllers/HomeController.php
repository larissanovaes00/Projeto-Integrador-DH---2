<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\pagsController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\carrinhoController;

class HomeController extends Controller
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
    public function index()
    {
        // Navegacao
        $navegacao = new SubcategoriaController();
        $categorias = $navegacao->getCategorias();

        // Popular DESTAQUES
        $quatroProdutos = new pagsController();
        $destaqueProdutos = $quatroProdutos->produtosDestaque();
        
        return view('home')
            ->with('navbar', $categorias)
            ->with('destaqueProdutos', $destaqueProdutos);
    }
}
