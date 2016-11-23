@extends('admin.template.plantilla.nav')

@section('title', 'Ubicacion sede')
@section('maps')
    <script type="text/javascript"></script>{!!$map['js']!!}
@endsection
@section('content')

    {!!$map['html']!!}

@endsection
