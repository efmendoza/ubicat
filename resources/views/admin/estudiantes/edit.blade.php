@extends('admin.template.plantilla.nav')

@section('title', 'Editar Estudiantes')
@section('content')


{!! Form::open(['route' => ['admin.estudiantes.update', $estudiante], 'method' => 'PUT']) !!}


<div class="form-group">
	{!! Form::label('nombre', 'Nombre')!!}
	{!! Form::text('nombre', $estudiante->nombre, ['class' => 'form-control', 'placeholder' => 'nombre', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('apellido', 'Apellido')!!}
	{!! Form::text('apellido', $estudiante->apellido, ['class' => 'form-control', 'placeholder' => 'apellido', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('correo', 'Correo electronico')!!}
	{!! Form::email('correo', $estudiante->correo, ['class' => 'form-control', 'placeholder' => 'correo@ejemplo.com', 'required'])!!}
</div>

<div class="form-group">

{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
</div>



{!! FORM::close() !!}

@endsection