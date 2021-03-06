@extends('layouts.plantilla')

@section('title', 'Propuestas')
    
@section('content')


<div class="container bg-dark">

    <div class="row justify-content-center bg-dark text-light">

    <h1 class="">Propuestas</h1>

    </div>

    <div class="bg-light text-dark">
        <ul>
            @foreach ($propuestas as $propuesta)
                @if ($propuesta->estado === 'activo')
                    <li>
                        <a href="{{route('propuestas.show', $propuesta->id)}}">{{$propuesta->titulo}}</a>  
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
        
        


    <div class="row justify-content-between bg-info">

        <a href="{{route('management')}}" class="text-white ml-5">Atras</a>
        <a href="{{route('propuestas.create')}}" class="text-white mr-5">Crear Propuesta</a>
    
    </div>



    <div class="row">



    </div>

    <div class="row justify-content-center">

        {{$propuestas->links()}}

    </div>

</div>

@endsection








{{-- <table class="table table-bordered table-hover">

    <thead class="thead-dark">

        <tr>
            <th><strong>Titulo</strong></th>
            <th><strong>Categoria</strong></th>
            <th><strong>Descripcion</strong></th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>

    </thead>



    @foreach ($propuestas as $propuesta)
        @if ($propuesta->estado === 'activo')
            
            <tr class="table-info">
                <td>{{$propuesta->titulo}}</td>
                <td>{{$propuesta->categoria}}</td>
                <td>{{$propuesta->descripcion}}</td>
                <td><a href="{{route('propuestas.edit', $propuesta->id)}}"><button><i class="far fa-edit"></i></button></a></td>
                
                <form action="{{route('propuestas.destroy', $propuesta)}}" method="POST">
                    @csrf
                    @method('delete')
                <td><a href=><button><i class="far fa-trash-alt"></i></button></a></td>
                </form>
                
            </tr>

        @endif
        
    @endforeach

</table> --}}