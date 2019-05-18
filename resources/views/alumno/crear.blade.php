@extends('layout.header')
@section('titulo','Menu Roles')
@section('contenido')
@include('layout.navbar')
 
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("/")}}">Menu Principal</a></li>
        <li class="breadcrumb-item"><a href="{{url("alumno/menu")}}">Menu Alumnos</a></li>
        <li class="breadcrumb-item active " aria-current="page">Crear Alumnos</li>
      </ol>
    </nav>
<form method="POST" action="{{ url('/alumno/crear') }}">  
    @csrf
    <div class="container">
            <div class="col-12 mt-3">
                <div class="jumbotron">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <h3>Formulario Crear Alumno</h3>
                            <hr>
                        </div>
                    </div>
                    @include('alumno.parcial.input')
                    <div class="form-row">
                        <div class="form-group col-12">
                            <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Enviar Formulario" >
                        </div>
                    </div>
                </div>
            </div>
    </div>
</form>

@endsection