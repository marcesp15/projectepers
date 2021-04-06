@extends('layouts.plantilla')

@section('title', 'Institutos')
    
@section('content')


<div class="container bg-dark">

    <div class="row justify-content-center bg-dark text-white">

    <h1 class="">Institutos</h1>

    </div>

    <div class="row justify-content-between bg-info">

        <a href="{{route('management')}}" class="text-white ml-5">Atras</a>
        <a href="{{route('institutos.create')}}" class="text-white mr-5">Crear Instituto</a>
    
    </div>



    <div class="row">
        <table class="table table-bordered table-hover">

            <thead class="thead-dark">

                <tr>
                    <th><strong>Nombre</strong></th>
                    <th><strong>Municipio</strong></th>
                    <th><strong>Direccion</strong></th>
                    <th><strong>Correo</strong></th>
                    <th><strong>Telefono</strong></th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>

            </thead>
    


            @foreach ($institutos as $instituto)
                @if ($instituto->estado === 'activo')
                    
                    <tr class="table-info">
                        <td>{{$instituto->nombre}}</td>
                        <td>{{$instituto->municipio}}</td>
                        <td>{{$instituto->direccion}}</td>
                        <td>{{$instituto->correo}}</td>
                        <td>{{$instituto->telefono}}</td>
                        <td><a href="{{route('institutos.edit', $instituto->id)}}"><button><i class="far fa-edit"></i></button></a></td>
                        
                        <form action="{{route('institutos.destroy', $instituto)}}" method="POST">
                            @csrf
                            @method('delete')
                        <td><a href=><button><i class="far fa-trash-alt"></i></button></a></td>
                        </form>
                        
                    </tr>

                @endif
                
            @endforeach

        </table>
    </div>

    <div class="row justify-content-center">

        {{$institutos->links()}}

    </div>

</div>

@endsection








{{-- @extends('layouts.plantilla')

@section('title', 'Institutos')
    
@section('content')

    <h1>Esta es la pagina index de los institutos</h1>

    <a href="{{route('institutos.create')}}">Crear Instituto</a>
    <br>
    <a href="{{route('management')}}">Atras</a>

    <ul>
        @foreach ($institutos as $instituto)
            <li>
                <a href="{{route('institutos.show', $instituto->id)}}">{{$instituto->nombre}}</a>
            </li>
        @endforeach
    </ul>

    {{$institutos->links()}}

@endsection --}}