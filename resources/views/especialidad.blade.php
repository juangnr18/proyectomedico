@extends('layouts.app')

@section('content')

<div class= "container my-4">
    <h1 class="display-4">Especialidad</h1>
<table class="table">
   <tbody>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Codigo</th>
        <th scope="col">Especialidad</th>
        <th scope="col">Editar</th>
        </tr>
    </thead>
    @foreach ($datos as $item2 )
    <tr>
        <th scape="row">{{$item2->id}} </th>
        <td>{{$item2->codigo}} </td>
        <td>
        <a href="{{route('nota.especial', $item2)}}">
        {{$item2->nombre}} </td></a>
        <td>
            <a href="{{route('nota.editar', $item2)}}" class="btn btn-warning btn-sm">Editar</a>
         </td>

    </tr>

       @endforeach()



    </tbody>

  </table
</div>
@endsection
