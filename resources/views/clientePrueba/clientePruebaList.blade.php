@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <table class="table" id="tablaCliente">

                </table>
            </div>
        </div>
    </div>
    @endsection
@section('scripts')
    <script>
        $(document).ready( function () {
            $('#tablaCliente').DataTable({
                ajax:{
                    url:'api/getClientes'
                },
                "columns":[
                    {title:'Nombre', data:'nombre', name: 'nombre'},
                    {title:'Apellido', data:'apellido', name: 'apellido'},
                    {title:'Edad', data:'edad', name: 'edad'},
                ]
            });
        } );
    </script>
    @endsection
