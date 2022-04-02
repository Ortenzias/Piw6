@extends('layouts.plantilla')

@section('title', 'Formulario' . $documentos->id)

@section('content')
    <h1>Vista del formulario del usuario {{$documentos->user_id}}</h1>
    <a href="{{route('inicio.index')}}">Volver a inicio</a>

    <p><strong>Datos del usuario</strong>{{$documentos->datos_json}}</p>
@endsection