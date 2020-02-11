<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificaciones extends Model
{
    protected $fillable = ['nombre', 'fechaDeCertificacion', 'entidad', 'resultado','resultadoGeneral', 'cefrLevel', 'fechaCertificacion', 'readingScore', 'writingScore', 'listeningScore', 'speakingScore', 'cambridgeEnglishScale', 'certificateResult'];
}
