<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model
{
    protected $fillable = [
        'noControl', 'maestro', 'alumno',

        'icInicial1stTest', 'icInicial2stTest', 'icInicial3stTest', 'icInicialPlataformaYtareas',
        'icInicialFinalScore', 'icInicialParticipation','icInicialUnderstanding','icInicialApplication',
        'icInicialPresentation', 'icInicialTestScore',

        'icbSuperior1stTest', 'icbSuperior2stTest', 'icbSuperior3stTest', 'workbook', 'icbSuperiorPlataformaYtareas',
        'icbSuperiorFinalScore', 'icbSuperiorParticipation','icbSuperiorUnderstanding','icbSuperiorApplication','icbSuperiorPresentation',
        'icbSuperiorTestScore',


        'icpIntermedio1stTest', 'icpIntermedio2stTest', 'icpIntermedio3stTest',
        'icpIntermedioPlataformaYtareas', 'icpIntermedioFinalScore',
        'icpIntermedioParticipation','icpIntermedioUnderstanding','icpIntermedioApplication','icpIntermedioPresentation',
        'icpIntermedioTestScore',


        'icIntermedio1stTest',
        'icIntermedio2stTest', 'icIntermedio3stTest', 'icIntermedioPlataformaYtareas',
        'icIntermedioFinalScore',
        'icIntermedioParticipation','icIntermedioUnderstanding','icIntermedioApplication','icIntermedioPresentation',
        'icIntermedioTestScore',
    ];
}
