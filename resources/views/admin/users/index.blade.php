@extends('admin.template.plantilla.nav')

@section('title', 'Lista Usuarios')
@section('content')

<a href="http://localhost/ubicaT/public/admin/users/create" class="btn btn-info">Registrar Usuarios</a><hr>

<table class="table table-striped">
	
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Tipo</th>
		<th>Accion</th>
	</thead>

	<tbody>
		@foreach($users as $user)
<tr>
	<td>{{ $user->id}}</td>
	<td>{{ $user->name}}</td>
	<td>{{ $user->email}}</td>

	<td>
@if($user->type == "admin")
<span class="label label-success">{{ $user->type}}</span>
@else
<span class="label label-danger">{{ $user->type}}</span>
@endif
	</td>

<td>

 <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

 <a href="{{ route('admin.users.destroy', $user->id)}}" onclick="return confirm('¿Quieres eliminar este usuario?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>

 </td>

</tr>

		@endforeach
	</tbody>

</table>

{!! $users -> render() !!}

@endsection