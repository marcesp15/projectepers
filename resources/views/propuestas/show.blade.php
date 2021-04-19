@extends('layouts.plantilla')

@section('title', 'ShowIns '.$propuestas->titulo)
    
@section('content')
    <h1>Proposta realitzada per {{$institutos->nombre}}</h1>
    <a href="{{route('propuestas.index')}}">Volver a los Institutos</a>
    <br>
    <a href="{{route('propuestas.edit', $propuestas->id)}}">Editar</a>

    <form action="{{route('propuestas.destroy', $propuestas)}}" method="POST">

        @csrf
        @method('delete')

        <button type="submit">Eliminar</button>
    </form>

@endsection