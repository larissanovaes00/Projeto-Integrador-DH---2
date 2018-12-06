<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Carrinho;
use App\Produto;
use Session;
use App\Marca;
use App\Imagem;
use App\Produto_imagem;

class pagsController extends Controller
{
    public function produtosDestaque()
    {
        $produtos = Produto::all()->take(4);

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

    public function detalheProduto($id)
    {
        $produtoQuery = Produto::where('id_produto', $id)->first();

        $produto = array(
            'idproduto' => $produtoQuery->id_produto,
            'marca' => $produtoQuery->marca,
            'nome' => $produtoQuery->prod_nome,
            'preco' => $produtoQuery->preco,
            'preco_antigo' => $produtoQuery->preco + 20,
            'parcelado' => $produtoQuery->preco / 2,
            'imagens' => $produtoQuery->imagens->all(),
            'descricao' => $produtoQuery->prod_descricao,
            'modo_de_usar' => $produtoQuery->modo_de_usar,
        );

        return $produto;
    }

    public function pesquisarSubcategoria($id)
    {
        $subcategoriaQuery = Produto::where('id_subcategoria', $id)->get();


        $pagProdutos = array();

        foreach($subcategoriaQuery as $produto)
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

    public function getCheckout()
    {
        if(!Session::has('Carrinho'))
        {
            return view('carrinho/carrinho-de-compra');
        }

        $oldCart = Session::get('Carrinho');
        $cart = new Carrinho($oldCart);
        $total = $cart->totalPrice;
        return view('carrinho/checkout')
            ->with('total', $total);
    }
}
