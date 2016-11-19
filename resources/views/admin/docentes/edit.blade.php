@extends('admin.template.plantilla.nav')

@section('title', 'Editar Docentes ' . $docente->nombre)
@section('content')


{!! Form::open(['route' => ['admin.docentes.update', $docente], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('nombre', 'Nombre')!!}
	{!! Form::text('nombre', $docente->nombre, ['class' => 'form-control', 'placeholder' => 'nombre', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('apellido', 'Apellido')!!}
	{!! Form::text('apellido', $docente->apellido, ['class' => 'form-control', 'placeholder' => 'apellido', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('correo', 'Correo electronico')!!}
	{!! Form::email('correo', $docente->correo, ['class' => 'form-control', 'placeholder' => 'correo@ejemplo.com', 'required'])!!}
</div>

<div class="form-group">

{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
</div>



{!! FORM::close() !!}

@endsection