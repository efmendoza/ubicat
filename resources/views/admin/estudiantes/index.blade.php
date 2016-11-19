@extends('admin.template.plantilla.nav')

@section('title', 'Lista Estudiante')
@section('content')

<a href="http://localhost/ubicaT/public/admin/estudiantes/create" class="btn btn-info">Registrar Estudiante</a><hr>

<table class="table table-striped">
	
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Correo</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($estudiantes as $estudiante)
<tr>
	<td>{{ $estudiante->id}}</td>
	<td>{{ $estudiante->nombre}}</td>
	<td>{{ $estudiante->apellido}}</td>
	<td>{{ $estudiante->correo}}</td>

	
<td>
 <a href="{{route('admin.estudiantes.edit', $estudiante->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
 </td>

</tr>

		@endforeach
	</tbody>

</table>

{!! $estudiantes -> render() !!}

@endsection