<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function exibirPorId($id)
    {
        $unicaCategoria = Categoria::find($id);

        $nomeCategoria = $unicaCategoria->categoria;

        return $nomeCategoria;
    }
}
