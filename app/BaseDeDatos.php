<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseDeDatos extends Model
{
    protected $fillable = [
        'grado', 'grupo', 'escolaridad', 'no_control', 'matricula', 'edad', 'incorporados', 'nivel', 'horario_sep', 'horario', 'nombre_completo', 'fecha_de_ingreso', 'telefono_casa_oficina', 'celular',
        'facebook', 'fecha_de_nacimiento', 'edad', 'direccion', 'municipio', 'email', 'grado_estudios', 'como_te_enteraste'
    ];
}
