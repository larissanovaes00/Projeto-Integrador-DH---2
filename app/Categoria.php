<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'CATEGORIA';
    protected $primaryKey = 'id_categoria';

    public function subCategorias()
    {
        return $this->hasMany(Sub_categoria::class, 'id_categoria', 'id_categoria');
    }
}
