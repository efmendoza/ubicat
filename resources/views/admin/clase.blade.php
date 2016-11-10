@extends('layouts.app')
@section('title', 'Crear Clase')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear una Clase</div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'clase', 'method' => 'POST']) !!}
                    {!! csrf_field() !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nombre')!!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la clase', 'required'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('num', 'Salon')!!}
                        <select name="salon" class="form-control">
                            <option>Seleccione un salon</option>
                            @foreach($sedes as $sede)

                            <optgroup name="sede" label="{!! $sede->nombre !!} ">

                                @foreach($salons as $salon)
                                    @if($salon->sede==$sede->nombre)
                                    <option value="{!! $salon->numero !!},{!! $salon->sede !!}">{!! $salon->numero !!}</option>

                                    @endif
                                @endforeach

                            </optgroup>
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