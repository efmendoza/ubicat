@extends('layouts.app')
@section('title', 'Crear Sede')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Gestión de Sedes</div>
                    <div class="panel-body">
                        <form action="{{ url('layouts/sede')}}" method="post">
                            {!! csrf_field() !!}
                            <label >Nombre</label>
                            <input name="nombre" type="text">
                            <hr>
                            <label>Direccion</label>
                            <input name="direccion" type ="text">
                            <label>Latitud</label>
                            <input name="latitud" type="number">
                            <label>Longitud</label>
                            <input  name="longitud" type="number">

                            <button type="submit">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection