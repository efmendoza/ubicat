@extends('admin.template.plantilla.nav')

@section('title', 'Listar Salones')
@section('content')

<a href="http://localhost/ubicaT/public/admin/salones/create" class="btn btn-info">Registrar Salones</a><hr>

<table class="table table-striped">
	
	<thead>
		<th>ID</th>
		<th>numero_salon</th>
		<th>id_sede</th>
		
	</thead>

	<tbody>
		@foreach($salones as $salon)
<tr>
	<td>{{ $salon->id}}</td>
	<td>{{ $salon->numero_salon}}</td>
	<td>{{ $salon->id_sede}}</td>
	
	
	<td>
 <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
 </td>

</tr>

		@endforeach
	</tbody>

</table>

{!! $salones -> render() !!}

@endsection