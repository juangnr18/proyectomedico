@extends('layouts.app')

@section('content')

<h1>Detalles</h1>
<h4>Nombre:{{$nota->nombre}}</h4>
<h4>Apellido:{{$nota->apellido}}</h4>
<h4>Rut:{{$nota->rut}}</h4>
<h4>Email:{{$nota->email}}</h4>
<h4>Telefono:{{$nota->telefono}}</h4>
<h4>Fecha de nacimiento:{{$nota->fechadenacimiento}}</h4>
<h4>Sexo:{{$nota->sexo}}</h4>
<h4>Direccion:{{$nota->direccion}}</h4>
<h4>Comuna:{{$nota->comuna}}</h4>
@endsection

