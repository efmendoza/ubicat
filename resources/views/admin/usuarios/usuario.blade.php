@extends('admin.template.plantilla.usuario')

@section('title', 'Lista Estudiante')
@section('content')


    <table class="table table-striped">

        <thead>
        <th>Día</th>
        <th>Clase</th>
        <th>Curso</th>
        <th>Sede</th>
        <th>Salon</th>
        <th>Accion</th>
        </thead>

        <tbody>

            <tr>
                <td>Lunes</td>
                <td>Programacion 5</td>
                <td>1011</td>
                <td>Principal-Norte</td>
                <td>S305</td>


                <td>

                    <a href="{{url('admin/mapa/ubicacion/sede','2' )}}" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    <a href="{{url('admin/mapa/ubicacion', '2')}}" class="btn btn-info"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
                </td>

            </tr>
            <tr>
                <td>Martes</td>
                <td>Bases de datos 3</td>
                <td>1011</td>
                <td>Jenny</td>
                <td>S101</td>


                <td>

                    <a href="{{url('admin/mapa/ubicacion/sede','3' )}}" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    <a href="{{url('admin/mapa/ubicacion', '3')}}" class="btn btn-info"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
                </td>

            </tr>
            <tr>
                <td>Jueves</td>
                <td>Ética </td>
                <td>1011</td>
                <td>Sur</td>
                <td>205</td>


                <td>

                    <a href="{{url('admin/mapa/ubicacion/sede','1' )}}" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    <a href="{{url('admin/mapa/ubicacion', '1')}}" class="btn btn-info"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
                </td>

            </tr>
            <tr>
                <td>Sábado</td>
                <td>Inglés </td>
                <td>501</td>
                <td>Jenny</td>
                <td>402</td>


                <td>

                    <a href="{{url('admin/mapa/ubicacion/sede','3' )}}" class="btn btn-info"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    <a href="{{url('admin/mapa/ubicacion', '3')}}" class="btn btn-info"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
                </td>

            </tr>
        </tbody>

    </table>



@endsection