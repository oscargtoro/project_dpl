<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'tb_roles';
    protected $fillable = ['rolNom', 'permisoCod'];
    protected $primaryKey = 'rolCod';
}
