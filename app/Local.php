<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'tb_locales';
    protected $fillable = ['nombre'];
    protected $primaryKey = 'codigo';
}
