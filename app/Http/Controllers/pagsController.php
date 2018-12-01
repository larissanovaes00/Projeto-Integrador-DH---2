<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Marca;
use App\Imagem;
use App\Produto_imagem;

class pagsController extends Controller
{
    public function produtosDestaque()
    {
        $produtos = Produto::all();

        $pagProdutos = array();

        foreach($produtos as $produto)
        {
            $pagProdutos[] = array(
                'idproduto' => $produto->id_produto,
                'marca' => $produto->marca,
                'nome' => $produto->prod_nome,
                'preco' => $produto->preco,
                'preco_antigo' => $produto->preco + 20,
                'parcelado' => $produto->preco / 2,
                'imagens' => $produto->imagens->all()
            );
        }   

        return $pagProdutos;
    }
}
