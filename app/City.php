<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'tb_ciudades';
    protected $fillable = ['ciudadNom'];
    protected $primaryKey = 'ciudadCod';
}
