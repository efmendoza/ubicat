
@extends('admin.template.main')

@section('title', 'Crear Usuario')
@section('content')


{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

<div class="form-group">
	{!! Form::label('name', 'Nombre')!!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Correo electronico')!!}
	{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'correo@ejemplo.com', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Contraseña')!!}
	{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Escribe tu contraseña', 'required'])!!}
</div>

<div class="form-group">

	{!! Form::label('type', 'Tipo')!!}
	{!! Form::select('type', ['' => 'Seleccione una opcion', 'member' => 'Usuario', 'admin' => 'administrador' ], null,  ['class' => 'form-control'])!!}	
</div>

<div class="form-group">

{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
</div>



{!! FORM::close() !!}

@endsection
