@extends('admin.template.plantilla.usuario')

@section('title', 'Ubicacion sede')
@section('header')
    <script type="text/javascript"> var centreGot=false;</script>{!!$map['js']!!}
@endsection
@section('content')

    {!!$map['html']!!}
    <div id="directionsDiv"></div>
@endsection
