@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">CALIFICACIONES</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-8 offset-md-8 offset-xs-8 mb-3">
                <a class="btn btn-success btn-block" href="{{route('calificaciones.create')}}" >NUEVO</a>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 mb-3">
                <a class="btn btn-success btn-block" href="#" >CATALOGO</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="table-responsive content-loader">
                    <table class="table table-hover table-sm table-striped" id="calificaciones">

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
            $('#calificaciones').DataTable({
                ajax:{
                    url:'api/getCalificaciones'
                },
                "columns":[
                    {title:'NO.', data:'id', name: 'id'},
                    {title:'NO. DE CONTROL', data:'noControl', name: 'noControl'},
                    {title:'MAESTRO', data:'maestro', name: 'maestro'},
                    {title:'NOMBRE COMPLETO DEL ALUMNO', data:'alumno', name: 'alumno'},
                    {title:'1ST TEST', data:'icInicial1stTest', name: 'icInicial1stTest'},
                    {title:'2DO TEST', data:'icInicial2stTest', name: 'icInicial2stTest'},
                    {title:'3ER TEST', data:'icInicial3stTest', name: 'icInicial3stTest'},
                    {title:'WORKBOOK', data:'workbook', name: 'workbook'},
                    {title:'PLATAFORMA Y TAREAS', data:'icInicialPlataformaYtareas', name: 'icInicialPlataformaYtareas'},
                    {title:'FINAL SCORE', data:'icInicialFinalScore', name: 'icInicialFinalScore'},
                    {title:'PARTICIPATION', data:'icInicialParticipation', name: 'icInicialParticipation'},
                    {title:'UNDERSTANDING OF CONCEPTS PRINCIPLES', data:'icInicialUnderstanding', name: 'icInicialUnderstanding'},
                    {title:'APPLICATION OF CONCEPTS', data:'icInicialApplication', name: 'icInicialApplication'},
                    {title:'PRESENTATION SKILL', data:'icInicialPresentation', name: 'icInicialPresentation'},
                    {title:'TEST SCORE', data:'icInicialTestScore', name: 'icInicialTestScore'},
                    {title:'1ST TEST', data:'icbSuperior1stTest', name: 'icbSuperior1stTest'},
                    {title:'2DO_TEST', data:'icbSuperior2stTest', name: 'icbSuperior2stTest'},
                    {title:'3ER_TEST', data:'icbSuperior3stTest', name: 'icbSuperior3stTest'},
                    {title:'PLATAFORMA_Y_TAREAS', data:'icbSuperiorPlataformaYtareas', name: 'icbSuperiorPlataformaYtareas'},
                    {title:'FINAL_SCORE', data:'icbSuperiorFinalScore', name: 'icbSuperiorFinalScore'},
                    {title:'PARTICIPATION', data:'icbSuperiorParticipation', name: 'icbSuperiorParticipation'},
                    {title:'UNDERSTANDING_OF_CONCEPTS_PRINCIPLES', data:'icbSuperiorUnderstanding', name: 'icbSuperiorUnderstanding'},
                    {title:'APPLICATION_OF_CONCEPTS', data:'icbSuperiorApplication', name: 'icbSuperiorApplication'},
                    {title:'PRESENTATION_SKILL', data:'icbSuperiorPresentation', name: 'icbSuperiorPresentation'},
                    {title:'TEST_SCORE', data:'icbSuperiorTestScore', name: 'icbSuperiorTestScore'},
                    {title:'1ST_TEST', data:'icpIntermedio1stTest', name: 'icpIntermedio1stTest'},
                    {title:'2DO_TEST', data:'icpIntermedio2stTest', name: 'icpIntermedio2stTest'},
                    {title:'3ER_TEST', data:'icpIntermedio3stTest', name: 'icpIntermedio3stTest'},
                    {title:'PLATAFORMA_Y_TAREAS', data:'icpIntermedioPlataformaYtareas', name: 'icpIntermedioPlataformaYtareas'},
                    {title:'FINAL_SCORE', data:'icpIntermedioFinalScore', name: 'icpIntermedioFinalScore'},
                    {title:'PARTICIPATION', data:'icpIntermedioParticipation', name: 'icpIntermedioParticipation'},
                    {title:'UNDERSTANDING_OF_CONCEPTS_PRINCIPLES', data:'icpIntermedioUnderstanding', name: 'icpIntermedioUnderstanding'},
                    {title:'APPLICATION_OF_CONCEPTS', data:'icpIntermedioApplication', name: 'icpIntermedioApplication'},
                    {title:'PRESENTATION_SKILL', data:'icpIntermedioPresentation', name: 'icpIntermedioPresentation'},
                    {title:'TEST_SCORE', data:'icpIntermedioTestScore', name: 'icpIntermedioTestScore'},
                    {title:'1ST_TEST', data:'icIntermedio1stTest', name: 'icIntermedio1stTest'},
                    {title:'2DO_TEST', data:'icIntermedio2stTest', name: 'icIntermedio2stTest'},
                    {title:'3ER_TEST', data:'icIntermedio3stTest', name: 'icIntermedio3stTest'},
                    {title:'PLATAFORMA_Y_TAREAS', data:'icIntermedioPlataformaYtareas', name: 'icIntermedioPlataformaYtareas'},
                    {title:'FINAL_SCORE', data:'icIntermedioFinalScore', name: 'icIntermedioFinalScore'},
                    {title:'PARTICIPATION', data:'icIntermedioParticipation', name: 'icIntermedioParticipation'},
                    {title:'UNDERSTANDING_OF_CONCEPTS_PRINCIPLES', data:'icIntermedioUnderstanding', name: 'icIntermedioUnderstanding'},
                    {title:'APPLICATION_OF_CONCEPTS', data:'icIntermedioApplication', name: 'icIntermedioApplication'},
                    {title:'PRESENTATION_SKILL', data:'icIntermedioPresentation', name: 'icIntermedioPresentation'},
                    {title:'TEST_SCORE', data:'icIntermedioTestScore', name: 'icIntermedioTestScore'},
                    {title:'OPCIONES', data:'actions'},
                ]
            });
        } );
    </script>
@endsection
