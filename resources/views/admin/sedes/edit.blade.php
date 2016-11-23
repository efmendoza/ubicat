@extends('admin.template.plantilla.nav')

@section('title', 'Registrar Sedes ' . $sede->nombre_sede)
@section('content')


{!! Form::open(['route' => ['admin.sedes.update', $sede], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('nombre_sede', 'Nombre Sede')!!}
	{!! Form::text('nombre_sede', $sede->nombre_sede, ['class' => 'form-control', 'placeholder' => 'nombre de la sede', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('latitud', 'Latitud de la sede')!!}
	{!! Form::text('latitud', $sede->latitud, ['class' => 'form-control', 'placeholder' => 'Ingrese la latitud de la sede', 'required'])!!}
</div>
<div class="form-group">
	{!! Form::label('longitud', 'longitud de la sede')!!}
	{!! Form::text('longitud', $sede->longitud, ['class' => 'form-control', 'placeholder' => 'longitud', 'required'])!!}
</div>

<div class="form-group">
{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
</div>



{!! FORM::close() !!}

@endsection
