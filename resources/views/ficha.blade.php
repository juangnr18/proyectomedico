@extends('layouts.app')

@section('content')

<h1>Base de datos</h1>

<div class= "container my-4">
    <h1 class="display-4"> Ficha Paciente </h1>
    <table class="table">
        <tbody>
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Rut</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Sexo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Comuna</th>
        </tr>
        </thead>
    </tbody>
    @foreach ( $dato as $item)
    <tr>
            <th scope="row">{{$item->id}}</th>
            <td>
                <a href="{{route('nota.detalle', $item)}}">
                {{$item->nombre}}
            </a></td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->edad}}</td>
            <td>{{$item->rut}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->telefono}}</td>
            <td>{{$item->fechadenacimiento}}</td>
            <td>{{$item->sexo}}</td>
            <td>{{$item->direccion}}</td>
            <td>{{$item->comuna}}</td>
    </tr>
    @endforeach()
      </table>

</div>
@endsection
