@extends('admin.template.plantilla.nav')

@section('title', 'Registrar Estudiantes')
@section('content')


{!! Form::open(['route' => 'admin.estudiantes.store', 'method' => 'POST']) !!}


<div class="form-group">
	{!! Form::label('nombre', 'Nombre')!!}
	{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'nombre', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('apellido', 'Apellido')!!}
	{!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'apellido', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('correo', 'Correo electronico')!!}
	{!! Form::email('correo', null, ['class' => 'form-control', 'placeholder' => 'correo@ejemplo.com', 'required'])!!}
</div>

<div class="form-group">

{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
</div>



{!! FORM::close() !!}

@endsection
