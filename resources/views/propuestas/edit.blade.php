@extends('layouts.plantilla')

@section('title', 'EditarProp')
    
@section('content')

    <h1>Esta es la pagina para editar institutos</h1>
    <a href="{{route('propuestas.index')}}">Atras</a>
    <form action="{{route('propuestas.update', $propuesta)}}" method="POST">

        @csrf
        @method('PUT')
        
        <label>
            Titulo:
            <br>
            <input type="text" name="titulo" value="{{old('titulo', $propuesta->titulo)}}">
        </label>

        @error('titulo')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
<br>
<br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $propuesta->categoria)}}">
        </label>

        @error('categoria')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
<br>
<br>
        <label>
            Descripcion:
            <br>
            <input type="text" name="descripcion" value="{{old('descripcion', $propuesta->descripcion)}}">
        </label>

        @error('descripcion')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror

<br>
<br>
<button type="submit">Actualizar</button>
    </form>

@endsection