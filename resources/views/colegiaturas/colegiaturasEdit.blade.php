@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-4">
                <form class="user" action="{{url('colegiaturas/'.$colegiatura->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$colegiatura->colegiaturas}}" id="colegiaturas" name="colegiaturas" placeholder="colegiaturas">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$colegiatura->fecha}}" id="fecha" name="fecha" placeholder="fecha">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$colegiatura->inscripcion}}" id="inscripcion" name="inscripcion" placeholder="inscripcion">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$colegiatura->libros}}" id="libros" name="libros" placeholder="libros">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$colegiatura->certificadoSep}}" id="certificadoSep" name="certificadoSep" placeholder="certificadoSep">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <button class="btn btn-primary" type="submit">Actualizar Datos</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
