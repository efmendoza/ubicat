@extends('admin.template.plantilla.nav')

@section('title', 'Ubicacion sede')
@section('maps')
    <script type="text/javascript"> var centreGot=false;</script>{!!$map['js']!!}
@endsection
@section('content')

    {!!$map['html']!!}
    <div id="directionsDiv"></div>
@endsection
