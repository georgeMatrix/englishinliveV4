@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">BAJAS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="table-responsive content-loader">
                    <table class="table table-hover table-sm table-striped" id="bajasTablas">

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('#bajasTablas').DataTable({
                ajax:{
                    url:'api/getBajas'
                },
                "columns":[
                    {title:'ID', data:'id', name: 'id'},
                    {title:'GRUPO', data:'grupo', name: 'grupo'},
                    {title:'ESCOLARIDAD', data:'escolaridad', name: 'escolaridad'},
                    {title:'NO CONTROL', data:'noControl', name: 'noControl'},
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

            fetch('api/darDeBaja')
                .then(function(response){
                    return response.json()
            })
                .then(function(response){
                    for(var i = 0; i < response.countBajas; i++){
                        count = i+1;
                        if (response.bajas[i].status == 'active'){
                            $("#btnBaja"+count).addClass('btn-success');
                            $("#btnBaja"+count).text('Activo')
                        } else{
                            $("#btnBaja"+count).addClass('btn-danger');
                        }

                        $("#formBaja"+count).submit(function(e){
                            e.preventDefault();
                            fetch($(this).prop('action'))
                                .then(function(response){
                                    return response.json()
                                })
                            .then(function(response){
                                $("#btnBaja"+response.id).addClass('btn-danger');
                                if (response.status == 'active') {
                                    $("#status"+response.id).text('Activo');
                                    $("#btnBaja"+response.id).text('Activo')
                                    $("#btnBaja"+response.id).addClass('btn-success');
                                    $("#btnBaja"+response.id).removeClass('btn-danger');
                                }else{
                                    $("#status"+response.id).text('Baja');
                                    $("#btnBaja"+response.id).text('Baja');
                                    $("#btnBaja"+response.id).addClass('btn-danger');
                                    $("#btnBaja"+response.id).removeClass('btn-success');
                                }

                            })
                        })
                    }
                })
        })
    </script>
    @endsection

