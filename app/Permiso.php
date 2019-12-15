<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'tb_permisos';
    protected $fillable = ['nombre'];
    protected $primaryKey = 'codigo';
}
