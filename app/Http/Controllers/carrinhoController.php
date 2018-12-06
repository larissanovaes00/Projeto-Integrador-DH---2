<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrinho;
use App\Produto;
use Session;

class carrinhoController extends Controller
{
    // Adiciona produtos ao carrinho
    public function getAddCart(Request $request, $id)
    {
        $produto = Produto::find($id);
        $oldCart = Session::has('Carrinho') ? Session::get('Carrinho') : null;
        $cart = new Carrinho($oldCart);
        $cart->addItem($produto, $produto->id_produto);

        $request->session()->put('Carrinho', $cart);
        return redirect('/home');
    }

    // Mostra o carrinho se ele existe dentro da session
    public function getCart()
    {
        if(!Session::has('Carrinho'))
        {
            return view('carrinho/carrinho-de-compra');
        }

        $oldCart = Session::get('Carrinho');
        $cart = new Carrinho($oldCart);
        $carrinho = array(
            'produtos' => $cart->items,
            'totalPrice' => $cart->totalPrice
        );
        return view('carrinho/carrinho-de-compra')
            ->with('carrinho', $carrinho);
    }

    // Retira um produto de um em um
    public function getReduceByOne($id)
    {
        $oldCart = Session::has('Carrinho') ? Session::get('Carrinho') : null;
        $cart = new Carrinho($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items) > 0)
        {
            Session::put('Carrinho', $cart);
        }
        else 
        {
            Session::forget('Carrinho');
        }

        return redirect('/carrinho-de-compra');
    }

    // Remover todas unidades de um determinado item de uma vez
    public function getRemoveItem($id)
    {
        $oldCart = Session::has('Carrinho') ? Session::get('Carrinho') : null;
        $cart = new Carrinho($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0)
        {
            Session::put('Carrinho', $cart);
        }
        else 
        {
            Session::forget('Carrinho');
        }
        return redirect('/carrinho-de-compra');
    }
}
