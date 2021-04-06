@extends('layouts.plantilla')

@section('title', 'EditarIns')
    
@section('content')

    <h1>Esta es la pagina para editar institutos</h1>
    
    <form action="{{route('institutos.update', $instituto)}}" method="POST">

        @csrf
        @method('PUT')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $instituto->nombre)}}">
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
            <input type="text" name="municipio" value="{{old('municipio', $instituto->municipio)}}">
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
            <input type="text" name="direccion" value="{{old('direccion', $instituto->direccion)}}">
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
            <input type="text" name="correo" value="{{old('correo', $instituto->correo)}}">
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
            <input type="text" name="telefono" value="{{old('telefono', $instituto->telefono)}}">
        </label>

        @error('telefono')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
<br>
<br>
<button type="submit">Actualizar</button>
    </form>

@endsection