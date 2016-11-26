@extends('admin.template.plantilla.nav')

@section('title', 'Registrar Sedes')
@section('content')


{!! Form::open(['route' => 'admin.sedes.store', 'method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label('nombre_sede', 'Nombre Sede')!!}
	{!! Form::text('nombre_sede', null, ['class' => 'form-control', 'placeholder' => 'nombre de la sede', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('latitud', 'Latitud de la sede')!!}
	{!! Form::text('latitud', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la latitud de la sede', 'required'])!!}
</div>
<div class="form-group">
	{!! Form::label('longitud', 'longitud de la sede')!!}
	{!! Form::text('longitud', null, ['class' => 'form-control', 'placeholder' => 'longitud', 'required'])!!}
</div>

<div class="form-group">
{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
</div>



{!! FORM::close() !!}

@endsection
