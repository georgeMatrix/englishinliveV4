<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegiaturas extends Model
{
    protected $fillable = ['colegiaturas', 'fecha', 'nombreAlumno', 'inscripcion', 'libros', 'certificadoSep'];
}
