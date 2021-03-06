
@extends('admin.template.plantilla.nav')

@section('title', 'Editar Usuario ' . $user->name)
@section('content')


{!! Form::open(['route' =>[ 'admin.users.update', $user], 'method' => 'PUT']) !!}

<div class="form-group">
	{!! Form::label('name', 'Nombre')!!}
	{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Correo electronico')!!}
	{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'correo@ejemplo.com', 'required'])!!}
</div>


<div class="form-group">

	{!! Form::label('type', 'Tipo')!!}
	{!! Form::select('type', ['' => 'Seleccione una opcion', 'member' => 'Usuario', 'admin' => 'administrador' ], null,  ['class' => 'form-control'])!!}	
</div>

<div class="form-group">

{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
</div>



{!! FORM::close() !!}

@endsection
