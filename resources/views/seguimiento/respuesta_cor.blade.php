@extends('layout.header')
@section('titulo','Menu Roles')
@section('contenido')
@include('layout.navbar')
 
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("/")}}">Menu Principal</a></li>
        <li class="breadcrumb-item active " aria-current="page">Guardar Respuesta</li>
      </ol>
    </nav>
    @if (session('msg'))
    <div class="alert alert-success">
     {{ session('msg') }}
    </div>
   @endif
<form method="POST" action="{{ url('/seguimiento/yes_cor') }}">  
    @csrf
    <div class="container">
            <div class="col-12 mt-3">
                <div class="jumbotron">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <h3>Registrar Respuesta de LLamado</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-12">
                                <label for="inputEmail">Respuesta Alumno</label>   
                                <input type="hidden" value="{{$Inasistencia->INA_CODIGO}}" name="codigo">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="respuesta" rows="3"></textarea>
                            </div>
                    </div>
                   
                            
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