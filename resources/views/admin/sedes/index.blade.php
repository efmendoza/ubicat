@extends('admin.template.plantilla.nav')

@section('title', 'Lista Sedes')
@section('content')


<a href="http://localhost/ubicaT/public/admin/sedes/create" class="btn btn-info">Registrar Sedes</a><hr>

<table class="table table-striped">
	
	<thead>
		<th>ID</th>
		<th>Nombre Sede</th>
		<th>Ubicacion</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($sedes as $sede)
<tr>
	<td>{{ $sede->id}}</td>
	<td>{{ $sede->nombre_sede}}</td>
	<td>{{ $sede->ubicacion}}</td>
	
	
<td>
 <a href="{{route('admin.sedes.edit', $sede->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
 </td>

 
</tr>

		@endforeach
	</tbody>

</table>

{!! $sedes -> render() !!}

@endsection