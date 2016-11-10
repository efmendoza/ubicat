@extends('layouts.app')
@section('title', 'Crear Salón')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear un Salon</div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'admin/salon', 'method' => 'POST']) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Piso')!!}
                        {!! Form::number('piso', null, ['class' => 'form-control', 'placeholder' => 'Piso', 'required'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('num', 'Numero')!!}
                        {!! Form::number('numero', null, ['class' => 'form-control', 'placeholder' => '101,202', 'required'])!!}
                    </div>


                    <div class="form-group">

                        {!! Form::label('type', 'Sede')!!}

                        <select name="sede" class="form-control">
                            <option>Seleccione una sede</option>
                            @foreach($sedes as $sede)

                                <option value="{!! $sede->nombre !!}">{!! $sede->nombre !!}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">

                        {!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
                    </div>



                    {!! FORM::close() !!}

                </div>
            </div>
        </div>
    </div>
    </div>







@endsection