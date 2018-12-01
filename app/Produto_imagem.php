<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto_imagem extends Model
{
    public $timestamps = false;

    protected $table = 'PRODUTO_IMAGEM';
    protected $primaryKey = null;
    public $incrementing = false;
    protected $fillable = array(
        'id_produto',
        'id_imagem'
    );

}
