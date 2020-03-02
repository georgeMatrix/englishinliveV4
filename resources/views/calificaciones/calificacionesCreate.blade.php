@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <form action="{{route('calificaciones.store')}}" method="post">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-4">
                {{csrf_field()}}
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <input required type="text" class="form-control form-control-user" id="noControl" name="noControl" placeholder="No. de Control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4">
                        <input required type="text" class="form-control form-control-user" id="maestro" name="maestro" placeholder="Maestro">
                    </div>
                    <div class="col-sm-4">
                        <input required type="text" class="form-control form-control-user" id="alumno" name="alumno" placeholder="Nombre de Alumno">
                    </div>
                    <div class="col-sm-4">
                        <select name="adultoNino" id="adultoNino" class="form-control">
                            <option value="adulto">Adulto</option>
                            <option value="nino">Niño</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#tab1" class="nav-link active" aria-controls="tab1" role="tab" data-toggle="tab">Inglés Comunicativo Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab2" class="nav-link" aria-controls="tab2" role="tab" data-toggle="tab">Inglés Comunicativo Básico Superior</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab3" class="nav-link" aria-controls="tab3" role="tab" data-toggle="tab">Inglés Comunicativo Pre Intermedio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab4" class="nav-link" aria-controls="tab4" role="tab" data-toggle="tab">Inglés Comunicativo Intermedio</a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1">

                                {{csrf_field()}}
                                <div class="form-group p-3">
                                    <h5>Inglés Comunicativo Inicial</h5>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input min="0" max="20" type="number" class="form-control form-control-user" id="icInicial1stTest" name="icInicial1stTest" onfocusout="sumatoria()" placeholder="1st test">
                                        </div>
                                        <div class="col-sm-4">
                                            <input min="0" max="30" type="number" class="form-control form-control-user" id="icInicial2stTest" name="icInicial2stTest" onfocusout="sumatoria()" placeholder="2do test">
                                        </div>
                                        <div class="col-sm-4">
                                            <input min="0" max="30" type="number" class="form-control form-control-user" id="icInicial3stTest" name="icInicial3stTest" onfocusout="sumatoria()" placeholder="3er test">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input min="0" max="10" type="number" class="form-control form-control-user" id="icInicialPlataformaYtareas" name="icInicialPlataformaYtareas" onfocusout="sumatoria()" placeholder="Plataforma y Tareas">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input min="0" max="10" type="number" class="form-control form-control-user" id="workbook" name="workbook" onfocusout="sumatoria()" placeholder="Workbook">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input readonly type="number" class="form-control form-control-user" id="icInicialFinalScore" name="icInicialFinalScore" onfocusout="sumatoria()" placeholder="Final Score">
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icInicialParticipation" name="icInicialParticipation" placeholder="Participation">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icInicialUnderstanding" name="icInicialUnderstanding" placeholder="Understanding of concepts principles">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icInicialApplication" name="icInicialApplication" placeholder="Application of concepts">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icInicialPresentation" name="icInicialPresentation" placeholder="Presentation Skill">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icInicialTestScore" name="icInicialTestScore" placeholder="Test Score">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-md-2 col-xs-2">
                                            <a class="btn btn-danger btn-block" href="{{route('calificaciones.index')}}" >Regresar</a>
                                        </div>
                                    </div>

                                </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab2">

                                <div class="form-group p-3">
                                    <h5>Inglés Comunicativo Básico Superior</h5>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input min="0" max="20" type="number" class="form-control form-control-user" id="icbSuperior1stTest" onfocusout="sumatoriaIcBs()" name="icbSuperior1stTest" placeholder="1st test">
                                        </div>
                                        <div class="col-sm-4">
                                            <input min="0" max="30" type="number" class="form-control form-control-user" id="icbSuperior2stTest" onfocusout="sumatoriaIcBs()" name="icbSuperior2stTest" placeholder="2do test">
                                        </div>
                                        <div class="col-sm-4">
                                            <input min="0" max="30" type="number" class="form-control form-control-user" id="icbSuperior3stTest" onfocusout="sumatoriaIcBs()" name="icbSuperior3stTest" placeholder="3er test">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input min="0" max="20" type="number" class="form-control form-control-user" id="icbSuperiorPlataformaYtareas" onfocusout="sumatoriaIcBs()" name="icbSuperiorPlataformaYtareas" placeholder="Plataforma y Tareas">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input readonly type="text" class="form-control form-control-user" id="icbSuperiorFinalScore" onfocusout="sumatoriaIcBs()" name="icbSuperiorFinalScore" placeholder="Final Score">
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icbSuperiorParticipation" name="icbSuperiorParticipation" placeholder="Participation">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icbSuperiorUnderstanding" name="icbSuperiorUnderstanding" placeholder="Understanding of concepts principles">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icbSuperiorApplication" name="icbSuperiorApplication" placeholder="Application of concepts">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icbSuperiorPresentation" name="icbSuperiorPresentation" placeholder="Presentation Skill">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icbSuperiorTestScore" name="icbSuperiorTestScore" placeholder="Test Score">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-md-2 col-xs-2">
                                            <a class="btn btn-danger btn-block" href="{{route('calificaciones.index')}}" >Regresar</a>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">

                                <div class="form-group p-3">
                                    <h5>Inglés Comunicativo Pre Intermedio</h5>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input min="0" max="20" type="number" class="form-control form-control-user" id="icpIntermedio1stTest" onfocusout="sumatoriaIcpi()" name="icpIntermedio1stTest" placeholder="1st test">
                                        </div>
                                        <div class="col-sm-4">
                                            <input min="0" max="30" type="number" class="form-control form-control-user" id="icpIntermedio2stTest" onfocusout="sumatoriaIcpi()" name="icpIntermedio2stTest" placeholder="2do test">
                                        </div>
                                        <div class="col-sm-4">
                                            <input min="0" max="30" type="number" class="form-control form-control-user" id="icpIntermedio3stTest" onfocusout="sumatoriaIcpi()" name="icpIntermedio3stTest" placeholder="3er test">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input min="0" max="20" type="number" class="form-control form-control-user" id="icpIntermedioPlataformaYtareas" onfocusout="sumatoriaIcpi()" name="icpIntermedioPlataformaYtareas" placeholder="Plataforma y Tareas">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input readonly type="text" class="form-control form-control-user" id="icpIntermedioFinalScore" onfocusout="sumatoriaIcpi()" name="icpIntermedioFinalScore" placeholder="Final Score">
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icpIntermedioParticipation" name="icpIntermedioParticipation" placeholder="Participation">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icpIntermedioUnderstanding" name="icpIntermedioUnderstanding" placeholder="Understanding of concepts principles">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icpIntermedioApplication" name="icpIntermedioApplication" placeholder="Application of concepts">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icpIntermedioPresentation" name="icpIntermedioPresentation" placeholder="Presentation Skill">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icpIntermedioTestScore" name="icpIntermedioTestScore" placeholder="Test Score">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-md-2 col-xs-2">
                                            <a class="btn btn-danger btn-block" href="{{route('calificaciones.index')}}" >Regresar</a>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab4">


                                <div class="form-group p-3">
                                    <h5>Inglés Comunicativo Intermedio</h5>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input min="0" max="20" type="number" class="form-control form-control-user" id="icIntermedio1stTest" onfocusout="sumatoriaIci()" name="icIntermedio1stTest" placeholder="1st test">
                                        </div>
                                        <div class="col-sm-4">
                                            <input min="0" max="30" type="number" class="form-control form-control-user" id="icIntermedio2stTest" onfocusout="sumatoriaIci()" name="icIntermedio2stTest" placeholder="2do test">
                                        </div>
                                        <div class="col-sm-4">
                                            <input min="0" max="30" type="number" class="form-control form-control-user" id="icIntermedio3stTest" onfocusout="sumatoriaIci()" name="icIntermedio3stTest" placeholder="3er test">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input min="0" max="20" type="number" class="form-control form-control-user" id="icIntermedioPlataformaYtareas" onfocusout="sumatoriaIci()" name="icIntermedioPlataformaYtareas" placeholder="Plataforma y Tareas">
                                        </div>
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input readonly type="text" class="form-control form-control-user" id="icIntermedioFinalScore" onfocusout="sumatoriaIci()" name="icIntermedioFinalScore" placeholder="Final Score">
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icIntermedioParticipation" name="icIntermedioParticipation" placeholder="Participation">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icIntermedioUnderstanding" name="icIntermedioUnderstanding" placeholder="Understanding of concepts principles">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icIntermedioApplication" name="icIntermedioApplication" placeholder="Application of concepts">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icIntermedioPresentation" name="icIntermedioPresentation" placeholder="Presentation Skill">
                                        </div>
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="icIntermedioTestScore" name="icIntermedioTestScore" placeholder="Test Score">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2 mb-3 mb-sm-0">
                                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-md-2 col-xs-2">
                                            <a class="btn btn-danger btn-block" href="{{route('calificaciones.index')}}" >Regresar</a>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/calificaciones/calificaciones.js')}}"></script>
@endsection
