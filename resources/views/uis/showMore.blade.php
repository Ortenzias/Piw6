@extends('layouts.plantilla')

@section('title', 'Formularios')

@section('content')
    <h1>Vista de los multiples formularios</h1>

    <ul>
        @foreach ($documentos as $documento)
            <li>
                <a href="{{route('show.formulario', $documento->user_id)}}">{{$documento->user_id}}</a>
            </li>
        @endforeach
    </ul>
    {{$documentos->links()}} 
    
@endsection

<!-- 
 <a href="{{route('busqueda.search')}}> </a>        
    -->