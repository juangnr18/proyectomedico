@extends('layouts.app')

@section('content')

<h1>Descripcion</h1>

<h4>Codigo:</h4>
    {{$notas->codigo}}
<h4>Especialidad:</h4>
    {{$notas->nombre}}
<h4>Descripcion:</h4>
    {{$notas->descripcion}}
@endsection
