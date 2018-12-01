<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_categoria extends Model
{
    protected $table = 'SUB_CATEGORIA';
    protected $primaryKey = 'id_subcategoria';

    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id_categoria', 'id_categoria');
    }
}
