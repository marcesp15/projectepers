@extends('layouts.plantilla')

@section('title', 'ShowIns '.$propuesta->titulo)
    
@section('content')
    <h1>Esta es la pagina de {{$propuesta->titulo}}</h1>
    <a href="{{route('propuestas.index')}}">Volver a los Institutos</a>
    <br>
    <a href="{{route('propuestas.edit', $propuesta->id)}}">Editar</a>

    <form action="{{route('propuestas.destroy', $propuesta)}}" method="POST">

        @csrf
        @method('delete')

        <button type="submit">Eliminar</button>
    </form>

@endsection