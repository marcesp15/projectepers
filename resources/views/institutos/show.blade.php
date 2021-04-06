@extends('layouts.plantilla')

@section('title', 'ShowIns '.$instituto->nombre)
    
@section('content')
    <h1>Esta es la pagina de {{$instituto->nombre}}</h1>
    <a href="{{route('institutos.index')}}">Volver a los Institutos</a>
    <br>
    <a href="{{route('institutos.edit', $instituto->id)}}">Editar</a>

    <form action="{{route('institutos.destroy', $instituto)}}" method="POST">

        @csrf
        @method('delete')

        <button type="submit">Eliminar</button>
    </form>

@endsection