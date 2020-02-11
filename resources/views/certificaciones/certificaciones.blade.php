@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">CERTIFICACIONES</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('certificaciones.create')}}" >NUEVO</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="table-responsive content-loader">
                    <table class="table table-hover table-sm table-striped" id="certificacionesTable">

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
            $('#certificacionesTable').DataTable({
                ajax:{
                    url:'api/getCertificaciones'
                },
                "columns":[
                    {title:'ID', data:'id', name: 'id'},
                    {title:'NOMBRE', data:'nombre', name: 'nombre'},
                    {title:'FECHA CERTIFICACION', data:'fechaCertificacion', name: 'fechaCertificacion'},
                    {title:'ENTIDAD', data:'entidad', name: 'entidad'},
                    {title:'RESULTADO', data:'resultado', name: 'resultado'},
                    {title:'RESULTADO GENERAL', data:'resultadoGeneral', name: 'resultadoGeneral'},
                    {title:'CEFR LEVEL', data:'cefrLevel', name: 'cefrLevel'},
                    {title:'READING SCORE', data:'readingScore', name: 'readingScore'},
                    {title:'WRITING SCORE', data:'writingScore', name: 'writingScore'},
                    {title:'LISTENING SCORE', data:'listeningScore', name: 'listeningScore'},
                    {title:'SPEAKING SCORE', data:'speakingScore', name: 'speakingScore'},
                    {title:'CAMBRIDGE ENGLISH SCALE', data:'cambridgeEnglishScale', name: 'cambridgeEnglishScale'},
                    {title:'CERTIFICATE RESULT', data:'cambridgeEnglishScale', name: 'cambridgeEnglishScale'},
                    {title:'OPCIONES', data:'actions'},
                ]
            });
        } );
    </script>
@endsection

