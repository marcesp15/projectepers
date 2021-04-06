@extends('layouts.plantilla')

@section('title', 'CrearIns')
    
@section('content')

    <h1>Esta es la pagina para crear institutos</h1>
    
    <form action="{{route('institutos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>

        @error('nombre')
            <br>
                <small>{{$message}}</small>
            <br>
        @enderror

<br>
<br>
        <label>
            Municipio:
            <br>
            <input type="text" name="municipio" value="{{old('municipio')}}">
        </label>

        @error('municipio')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
<br>
<br>
        <label>
            Direccion:
            <br>
            <input type="text" name="direccion" value="{{old('direccion')}}">
        </label>
        
        @error('direccion')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
<br>
<br>
        <label>
            Correo:
            <br>
            <input type="text" name="correo" value="{{old('correo')}}">
        </label>

        @error('correo')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
<br>
<br>
        <label>
            Telefono:
            <br>
            <input type="text" name="telefono" value="{{old('telefono')}}">
        </label>

        @error('telefono')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
<br>
<br>
<button type="submit">Enviar</button>
    </form>

@endsection