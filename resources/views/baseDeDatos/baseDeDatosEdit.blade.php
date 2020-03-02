@extends('layouts.app')
@section('content')
    @include('include.menu')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xl-12 mb-4">
                <form class="user" action="{{url('baseDeDatos/'.$baseDeDatos->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->grado}}" id="grado" name="grado" placeholder="Grado">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->grupo}}" id="grupo" name="grupo" placeholder="Grupo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->escolaridad}}" id="escolaridad" name="escolaridad" placeholder="Escolaridad">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->no_control}}" id="no_control" name="no_control" placeholder="No. de Control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->matricula}}" id="matricula" name="matricula" placeholder="Matricula">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->edad}}" id="edad" name="edad" placeholder="Edad">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->incorporados}}" id="incorporados" name="incorporados" placeholder="Incorporados">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->nivel}}" id="nivel" name="nivel" placeholder="Nivel">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->horario_sep}}" id="horario_sep" name="horario_sep" placeholder="Horario Sep">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->horario}}" id="horario" name="horario" placeholder="Horario">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->nombre_completo}}" id="nombre_completo" name="nombre_completo" placeholder="Nombre Completo">
                        </div>
                        <div class="col-sm-6">
                            <input required readonly type="text" class="form-control form-control-user {{$errors->has('fecha_de_ingreso')?'is-invalid':''}}"
                                   value="{{$baseDeDatos->fecha_de_ingreso}}" id="fecha_de_ingreso" name="fecha_de_ingreso" placeholder="Fecha de Ingreso"
                                   placeholder="Fecha de Ingreso">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->telefono_casa_oficina}}" id="telefono_casa_oficina" name="telefono_casa_oficina" placeholder="Telefono Casa u Oficina">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->celular}}" id="celular" name="celular" placeholder="Celular">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->facebook}}" id="facebook" name="facebook" placeholder="Facebook">
                        </div>
                        <div class="col-sm-6">
                            <input required readonly type="text" class="form-control form-control-user {{$errors->has('fecha_de_nacimiento')?'is-invalid':''}}"
                                   value="{{$baseDeDatos->fecha_de_nacimiento}}" id="fecha_de_nacimiento" name="fecha_de_nacimiento" placeholder="Fecha de Nacimiento">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->edad}}" id="edad" name="edad" placeholder="Edad">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->direccion}}" id="direccion" name="direccion" placeholder="Direccion">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->municipio}}" id="municipio" name="municipio" placeholder="Municipio">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->email}}" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->grado_estudios}}" id="grado_estudios" name="grado_estudios" placeholder="Grado De Estudios">
                        </div>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control form-control-user" value="{{$baseDeDatos->como_te_enteraste}}" id="como_te_enteraste" name="como_te_enteraste" placeholder="Como te Enteraste">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                        </div>
                        <div class="col-md-2">
                            <a class="btn btn-danger" href="{{url('baseDeDatos')}}"><i class="fas fa-times"></i> Cancelar</a>
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
