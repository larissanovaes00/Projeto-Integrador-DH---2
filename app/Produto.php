<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;

    protected $table = 'PRODUTO';
    protected $primaryKey = 'id_produto';
    protected $guarded = array(
        'id_produto'
    );
    
    public function marca()
    {
        return $this->hasMany(Marca::class, 'id_marca', 'id_marca');
    }

    public function imagens()
    {
        return $this->belongsToMany(Imagem::class, 'PRODUTO_IMAGEM', 'id_produto', 'id_imagem');
    }
}
