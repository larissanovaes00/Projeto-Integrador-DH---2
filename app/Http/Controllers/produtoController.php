<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SubcategoriaController;
use App\Produto;
use App\Marca;
use App\Imagem;
use App\Produto_imagem;

class produtoController extends Controller
{
    public function cadastroProduto()
    {
        $subcategoriaController = new SubcategoriaController();

        $categorias = $subcategoriaController->getCategorias();

        $marcas = Marca::all();
        

        return view('admin/cadastrar-produto')
            ->with('categorias', $categorias)
            ->with('marcas', $marcas);
    }

    public function adicionarProduto(Request $request)
    {
        $produto = Produto::create([
            'prod_nome' => $request->input('product-name'),
            'preco' => $request->input('product-price'),
            'prod_descricao' => $request->input('product-description'),
            'id_marca' => $request->input('id_marca'),
            'id_subcategoria' => $request->input('id_subcategoria'),
            'codigo_sku' => $request->input('product-sku'),
            'modo_de_usar' => $request->input('how-to-use')
        ]);
        
        $abcd = array(
            'A', 'B', 'C', 'D'
        );

        foreach($abcd as $a)
        {
            if($request->hasFile('product-pic'.$a) && $request->file('product-pic'.$a)->isValid())
            {

                $name = uniqId(date('HisYmd'));

                $extension = $request->file('product-pic'.$a)->extension();

                $nameFile = $name.".".$extension;

                $upload = $request->file('product-pic'.$a)->storeAs('produtos', $nameFile, 'public');

                $originalName = $request->file('product-pic'.$a)->getClientOriginalName();

                if($upload)
                {
                    $imagem = Imagem::create([
                        'caminho_imagem' => $nameFile,
                        'nome_original' => $originalName
                    ]);

                    $produto_imagem = Produto_imagem::create([
                        'id_produto' => $produto->id_produto,
                        'id_imagem' => $imagem->id_imagem
                    ]);
                }
            }
        }

        return view('admin/cadastrado');
    }
}
