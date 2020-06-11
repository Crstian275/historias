<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
     protected $fillable = [
        'Titulo', 'Descripcion', 'Texto','imagen','Enlace_historia','Enlace_video'
    ];
}
