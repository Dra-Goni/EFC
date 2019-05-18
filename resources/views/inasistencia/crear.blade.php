@extends('layout.header')
@section('titulo','Menu Roles')
@section('contenido')
@include('layout.navbar')
 
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("/")}}">Menu Principal</a></li>
        <li class="breadcrumb-item active " aria-current="page">Crear Inasistencia</li>
      </ol>
    </nav>
    @if (session('msg'))
    <div class="alert alert-success">
     {{ session('msg') }}
    </div>
   @endif
<form method="POST" action="{{ url('/inasistencia/crear') }}">  
    @csrf
    <div class="container">
            <div class="col-12 mt-3">
                <div class="jumbotron">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <h3>Registrar Inasistencia</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-12">
                                <label for="inputEmail">Rut Alumno</label>   
                                <input type="text"   class="form-control" name="INA_ALUMNO" >    
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-12">
                                <label for="inputEmail">Asignatura</label>   
                                <input type="text"   class="form-control" name="INA_ASIGNATURA" >    
                            </div>
                    </div>
                    <div class="form-row">
                            <div class="form-group col-12">
                                <label for="inputEmail">Fecha</label>   
                                <input type="date"   class="form-control" name="INA_FECHA" >    
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12">
                                <label for="inputEmail">Seccion</label>   
                                <input type="text"   class="form-control" name="INA_SECCION" >  
                                      
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