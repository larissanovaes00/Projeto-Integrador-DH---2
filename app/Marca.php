<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $timestamps = false;
    
    protected $table = 'MARCA';
    protected $primaryKey = 'id_marca';
}
