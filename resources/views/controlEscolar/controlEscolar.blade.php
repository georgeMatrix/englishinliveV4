@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">CONTROL ESCOLAR</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('controlEscolar.create')}}" >NUEVO</a>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="table-responsive content-loader">
                            <table class="table table-hover table-sm table-striped" id="controlEscolarTable">

                            </table>
                        </div>
                </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
            $('#controlEscolarTable').DataTable({
                ajax:{
                    url:'api/getControlEscolar'
                },
                "columns":[
                    {title:'ID', data:'id', name: 'id'},
                    {title:'GRUPO', data:'grupo', name: 'grupo'},
                    {title:'ESCOLARIDAD', data:'escolaridad', name: 'escolaridad'},
                    {title:'NO. CONTROL', data:'noControl', name: 'noControl'},
                    {title:'CICLO ESCOLAR', data:'cicloEscolar', name: 'cicloEscolar'},
                    {title:'EDAD', data:'edad', name: 'edad'},
                    {title:'INCORPORADOS', data:'incorporados', name: 'incorporados'},
                    {title:'SEXO', data:'sexo', name: 'sexo'},
                    {title:'NIVELES', data:'niveles', name: 'niveles'},
                    {title:'MAESTRO', data:'maestro', name: 'maestro'},
                    {title:'HORARIO SEP', data:'horarioSep', name: 'horarioSep'},
                    {title:'CURP', data:'curp', name: 'curp'},
                    {title:'HORARIO', data:'horario', name: 'horario'},
                    {title:'MODULOS ACREDITADOS', data:'modulosAcreditados', name: 'modulosAcreditados'},
                    {title:'NOMBRE COMPLETO', data:'nombreCompleto', name: 'nombreCompleto'},
                    {title:'OPCIONES', data:'actions'},
                ]
            });
        } );
    </script>
@endsection
