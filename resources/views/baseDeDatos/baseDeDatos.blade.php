@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">BASE DE DATOS</h1>
            </div>
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('baseDeDatos.create')}}" >NUEVO</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="table-responsive content-loader">
                    <table class="table table-hover table-sm table-striped" id="baseDeDatosTable">

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#baseDeDatosTable').DataTable({
                ajax:{
                    url:'api/getBaseDeDatos'
                },
                "columns":[
                    {title:'ID', data:'id', name: 'id'},
                    {title:'GRADO', data:'grado', name: 'grado'},
                    {title:'GRUPO', data:'grupo', name: 'grupo'},
                    {title:'ESCOLARIDAD', data:'escolaridad', name: 'escolaridad'},
                    {title:'NO. CONTROL', data:'no_control', name: 'no_control'},
                    {title:'MATRICULA', data:'matricula', name: 'matricula'},
                    {title:'EDAD', data:'edad', name: 'edad'},
                    {title:'INCORPORADOS', data:'incorporados', name: 'incorporados'},
                    {title:'NIVELES', data:'nivel', name: 'nivel'},
                    {title:'HORARIOS SEP', data:'horario_sep', name: 'horario_sep'},
                    {title:'HORARIOS', data:'horario', name: 'horario'},
                    {title:'NOMBRE COMPLETO', data:'nombre_completo', name: 'nombre_completo'},
                    {title:'FECHA DE INGRESO', data:'fecha_de_ingreso', name: 'fecha_de_ingreso'},
                    {title:'TELEFONO CASA OFICINA', data:'telefono_casa_oficina', name: 'telefono_casa_oficina'},
                    {title:'CELULAR', data:'celular', name: 'celular'},
                    {title:'FACEBOOK', data:'facebook', name: 'facebook'},
                    {title:'FECHA DE NACIMIENTO', data:'fecha_de_nacimiento', name: 'fecha_de_nacimiento'},
                    {title:'EDAD', data:'edad', name: 'edad'},
                    {title:'DIRECCION', data:'direccion', name: 'direccion'},
                    {title:'MUNICIPIO', data:'municipio', name: 'municipio'},
                    {title:'EMAIL', data:'email', name: 'email'},
                    {title:'GRADO DE ESTUDIOS', data:'grado_estudios', name: 'grado_estudios'},
                    {title:'COMO TE ENTERASTE', data:'como_te_enteraste', name: 'como_te_enteraste'},
                    {title:'OPCIONES', data:'actions'},
                ]
            });
        } );
    </script>
@endsection
