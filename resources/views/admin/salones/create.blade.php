@extends('admin.template.plantilla.nav')


@section('title', 'Registrar Salones')
@section('content')


{!! Form::open(['route' => 'admin.salones.store', 'method' => 'POST']) !!}


<div class="form-group">
	{!! Form::label('numero_salon', 'Numero Salon')!!}
	{!! Form::text('numero_salon', null, ['class' => 'form-control', 'placeholder' => 'numero de salon', 'required'])!!}
</div>

<div class="form-group">
	{!! Form::label('id_sede', 'Numero de Sede')!!}
	{!! Form::text('id_sede', null, ['class' => 'form-control', 'placeholder' => 'Sede', 'required'])!!}
</div>



<div class="form-group">

{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
</div>



{!! FORM::close() !!}


@endsection