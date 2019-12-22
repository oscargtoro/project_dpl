<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 'tb_locales';
    protected $fillable = ['localNom'];
    protected $primaryKey = 'localCod';
}
