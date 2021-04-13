@extends('layouts.plantilla')

@section('title', 'CrearIns')
    
@section('content')

    <h1>Esta es la pagina para crear propuestas</h1>
    <a href="{{route('propuestas.index')}}">Atras</a>
    <form action="{{route('propuestas.store')}}" method="POST">

        @csrf

        <label>
            Titulo:
            <br>
            <input type="text" name="titulo" value="{{old('titulo')}}">
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
            <input type="text" name="categoria" value="{{old('categoria')}}">
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
            <input type="text" name="descripcion" value="{{old('descripcion')}}">
        </label>
        
        @error('descripcion')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
<br>
<br>
<button type="submit">Enviar</button>
    </form>

@endsection