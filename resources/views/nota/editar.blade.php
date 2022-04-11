@extends('layouts.app')

@section('content')
<h1>Editar especialidad {{$nota2 ->id}}</h1>
@if (session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edita la especialidad') }}</div>
                    <form action={{route('nota.update',$nota2->id)}} method="POST">
                    @method('PUT')
                        @csrf

                        <div class="row mb-3">
                            <label for="id" class="col-md-4 col-form-label text-md-end">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{$nota2->id }}" required autocomplete="id">

                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="codigo" class="col-md-4 col-form-label text-md-end">{{ __('Codigo') }}</label>

                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control @error('codigo') is-invalid @enderror" name="codigo" value="{{ $nota2->codigo }}" required autocomplete="codigo">

                                @error('codigo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Especialidad') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $nota2->nombre }}" required autocomplete="nombre">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <div class="row mb-3">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>

                                <div class="col-md-6">
                                  <textarea id="descripcion"  type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ $nota2->descripcion}}" required autocomplete="descripcion"></textarea>

                                    @error('descripcion')
                                       <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-warning btn-block">
                                        {{ __('Editar') }}
                                    </button>
                                </div>

                                </div>

                    </form>
            </div>
        </div>
    </div>
</div>







@endsection
