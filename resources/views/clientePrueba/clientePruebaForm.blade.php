@extends('layouts.app')
@section('content')
    <form action="{{route("clientePrueba.store")}}" method="post">

        <input type="text" placeholder="nombre" name="nombre">
        <input type="text" placeholder="apellido" name="apellido">
        <input type="text" placeholder="edad" name="edad">
        <input type="submit">
    </form>
    @endsection