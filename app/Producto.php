<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'tb_productos';
    protected $fillable = ['nombre'];
    protected $primaryKey = 'codigo';
}
