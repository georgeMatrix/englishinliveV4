@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-md-2 col-xs-2 offset-xl-10 offset-md-10 offset-xs-10 mb-3">
                <a class="btn btn-success btn-block" href="{{route('colegiaturas.create')}}" >NUEVO</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="table-responsive content-loader">
                    <table class="table table-hover table-sm table-striped" id="colegiaturasTable">

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready( function () {
            $('#colegiaturasTable').DataTable({
                ajax:{
                    url:'api/getColegiaturas'
                },
                "columns":[
                    {title:'ID', data:'id', name: 'id'},
                    {title:'COLEGIATURAS', data:'colegiaturas', name: 'colegiaturas'},
                    {title:'NOMBRE DEL ALUMNO', data:'nombreAlumno', name: 'nombreAlumno'},
                    {title:'FECHA', data:'fecha', name: 'fecha'},
                    {title:'INSCRIPCION', data:'inscripcion', name: 'inscripcion'},
                    {title:'LIBROS', data:'libros', name: 'libros'},
                    {title:'CERTIFICADOS SEP', data:'certificadoSep', name: 'certificadoSep'},
                    {title:'OPCIONES', data:'actions'},
                ]
            });
        } );
    </script>
@endsection
