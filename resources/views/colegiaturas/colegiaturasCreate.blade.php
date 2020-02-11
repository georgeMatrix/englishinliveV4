@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-4">
                <form class="user" action="{{route('colegiaturas.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="colegiaturas" name="colegiaturas" placeholder="colegiaturas">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="nombreAlumno" name="nombreAlumno" placeholder="Nombre del alumno">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="inscripcion" name="inscripcion" placeholder="inscripcion">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="libros" name="libros" placeholder="libros">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" id="certificadoSep" name="certificadoSep" placeholder="certificadoSep">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="fecha" name="fecha" placeholder="Fecha">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection