@extends('admin.template.plantilla.nav')

@section('title', 'Registrar Sedes')
@section('content')


{!! Form::open(['route' => 'admin.sedes.store', 'method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label('nombre_sede', 'Nombre Sede')!!}
	{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'nombre de la sede', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('ubicacion', 'Ubicacion de la sede')!!}
	{!! Form::text('ubicacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese ubicacion de la sede', 'required'])!!}
</div>

<div class="form-group">
{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
</div>



{!! FORM::close() !!}

@endsection
