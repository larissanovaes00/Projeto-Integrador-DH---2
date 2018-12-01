<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    public $timestamps = false;

    protected $table = 'IMAGEM';
    protected $primaryKey = 'id_imagem';
    protected $guarded = array(
        'id_imagem'
    );
}
