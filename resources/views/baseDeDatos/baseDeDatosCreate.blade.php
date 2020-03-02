@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center title">NUEVO BASE DE DATOS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-4">
                <form class="user" action="{{route('baseDeDatos.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" id="grado" name="grado" placeholder="Grado">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" id="grupo" name="grupo" placeholder="Grupo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" id="escolaridad" name="escolaridad" placeholder="Escolaridad">
                        </div>
                        <div class="col-sm-6">
                            <input required type="number" class="form-control form-control-user" id="no_control" name="no_control" placeholder="No. de Control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" id="matricula" name="matricula" placeholder="Matricula">
                        </div>
                        <div class="col-sm-6">
                            <input required type="number" class="form-control form-control-user" id="edad" name="edad" placeholder="Edad">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" id="incorporados" name="incorporados" placeholder="Incorporados">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" id="nivel" name="nivel" placeholder="Nivel">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" id="horario_sep" name="horario_sep" placeholder="Horario Sep">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" id="horario" name="horario" placeholder="Horario">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" id="nombre_completo" name="nombre_completo" placeholder="Nombre Completo">
                        </div>
                        <div class="col-sm-6">
                            <input required readonly type="text" class="form-control form-control-user {{$errors->has('fecha_de_ingreso')?'is-invalid':''}}" value="{{old('fecha_de_ingreso')}}" id="fecha_de_ingreso" name="fecha_de_ingreso" placeholder="Fecha de Ingreso">
                                {!! $errors->first('fecha_de_ingreso','<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="number" class="form-control form-control-user" id="telefono_casa_oficina" name="telefono_casa_oficina" placeholder="Telefono Casa u Oficina">
                        </div>
                        <div class="col-sm-6">
                            <input required type="number" class="form-control form-control-user" id="celular" name="celular" placeholder="Celular">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" id="facebook" name="facebook" placeholder="Facebook">
                        </div>
                        <div class="col-sm-6">
                            <input  required readonly type="text" class="form-control form-control-user {{$errors->has('fecha_de_nacimiento')?'is-invalid':''}}" value="{{old('fecha_de_nacimiento')}}" id="fecha_de_ingreso" name="fecha_de_ingreso" placeholder="Fecha de Ingreso" id="fecha_de_nacimiento" name="fecha_de_nacimiento" placeholder="Fecha de Nacimiento">
                            {!! $errors->first('fecha_de_nacimiento','<div class="invalid-feedback">:message</div>') !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" id="direccion" name="direccion" placeholder="Direccion">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" id="municipio" name="municipio" placeholder="Municipio">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input required type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" id="grado_estudios" name="grado_estudios" placeholder="Grado De Estudios">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input required type="text" class="form-control form-control-user" id="como_te_enteraste" name="como_te_enteraste" placeholder="Como te Enteraste">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2 mb-3 mb-sm-0">
                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                        </div>
                        <div class="col-lg-2 col-md-2 col-md-2 col-xs-2">
                            <a class="btn btn-danger btn-block" href="{{route('baseDeDatos.index')}}" >Regresar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/baseDatos/baseDatosCreate.js')}}"></script>
@endsection
