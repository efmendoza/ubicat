@extends('admin.template.plantilla.nav')

@section('title', 'Lista Docentes')
@section('content')

@include('flash::message')

<a href="http://localhost/ubicaT/public/admin/docentes/create" class="btn btn-info">Registrar Docentes</a><hr>

<table class="table table-striped">
	
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Correo</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($docentes as $docente)
<tr>
	<td>{{ $docente->id}}</td>
	<td>{{ $docente->nombre}}</td>
	<td>{{ $docente->apellido}}</td>
	<td>{{ $docente->correo}}</td>

	
<td>
 <a href="{{route('admin.docentes.edit', $docente->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
 </td>

</tr>

		@endforeach
	</tbody>

</table>

{!! $docentes -> render() !!}

@endsection