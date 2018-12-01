<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub_categoria;
use App\Categoria;

class SubcategoriaController extends Controller
{
    public function getCategorias()
    {
        $queryCategorias = Sub_categoria::all();

        $categorias = array();

        foreach($queryCategorias as $nome)
        {
            if(!isset($categorias[$nome->id_categoria]))
            {
                $categorias[$nome->id_categoria] = array(
                    'nome' => $nome->categoria->categoria,
                    'subcategorias' => array()
                );
            }
            
            $categorias[$nome->id_categoria]['subcategorias'][] = array(
                'id' => $nome->id_subcategoria,
                'descricao' => $nome->descricao_subcategoria
            ); 
        }

        return $categorias;
    }

    public function exibir()
    {
        $categorias = $this->getCategorias();
        
        return view('teste/teste')
            ->with('categorias', $categorias);
    }
}
