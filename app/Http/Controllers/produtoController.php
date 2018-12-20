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

        // dd($produto);
        
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

        return redirect('/sucessocadastro');
    }

    public function todosprodutos()
    {
        $todosProdutos = Produto::orderBy('id_produto')->paginate(8);
        $produtosCompletos = array();

        foreach($todosProdutos as $produtos)
        {
            $produtosCompletos[] = array(
                'idproduto' => $produtos['id_produto'],
                'nome' => $produtos["prod_nome"],
                'preco' => $produtos["preco"],
                'marca' => Marca::find($produtos["id_marca"]),
                'descricao' => $produtos["prod_descricao"],
                'mododeuso' => $produtos["modo_de_usar"],
                'sku' => $produtos["codigo_sku"] 
            );
        }

        $paginas = $todosProdutos->links();

        return view('admin/todosprodutos')
            ->with('paginas', $paginas)
            ->with('todosProdutos', $produtosCompletos);
    }

    public function editarFormulario($id)
    {
        $produto = Produto::find($id);
        
        $marcas = Marca::all();

        $subcategoriaController = new SubcategoriaController();
        $categorias = $subcategoriaController->getCategorias();

        $imagens = $produto->imagens->all();
        
        return view('admin/formulario-editar')
            ->with('marcas', $marcas)
            ->with('categorias', $categorias)
            ->with('imagens', $imagens)
            ->with('produto', $produto);
    }

    public function editarProduto(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto["prod_nome"] = $request->input('product-name');
        $produto["preco"] = $request->input('product-price');
        $produto["prod_descricao"] = $request->input('product-description');
        $produto["id_marca"] = $request->input('id_marca');
        $produto["id_subcategoria"] = $request->input('id_subcategoria');
        $produto["codigo_sku"] = $request->input('product-sku');
        $produto["modo_de_usar"] = $request->input('how-to-use');

        $produto->save();
        
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

        return redirect('/todosprodutos');
    }

    public function removerProduto($id)
    {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect('/todosprodutos');
    }

    public function removerImagem($id)
    {
        $imagem = Imagem::find($id);

        $imagem->delete();

        return response()->json([
            'ok' => 1
        ]);
    }
}
