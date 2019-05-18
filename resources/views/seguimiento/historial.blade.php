@extends('layout.header')
@section('titulo','Ver Cargo')
@section('contenido')
@include('layout.navbar')

    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url("/")}}">Menu Principal</a></li>
                
              <li class="breadcrumb-item" aria-current="page"><a href="{{url('/seguimiento/menu')}}">Menu Control</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ver Inasistencia</li>
            </ol>
          </nav>
          @if (session('msg'))
          <div class="alert alert-success">
           {{ session('msg') }}
          </div>
         @endif
    </div> 
    <div class="container mt-5">
    <div class="form-row">
        <div class="form-group col-12 text-center">
            <h5>Todas las Inasistencias </h5>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nº</th>
                    <th>Fecha</th>
                    <th>Alumno</th>
                    <th>Seccion</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>

                    @if(count($Inasistencia))
                    @foreach ($Inasistencia as $item)
                    <tr>
                        <td scope="row">{{$item->INA_CODIGO}}</td>
                        <td>{{$item->INA_FECHA}}</td>
                        <td>{{$item->INA_ALUMNO}}</td>
                        <td>{{$item->INA_SECCION}}</td>
                        <td>{{$item->INA_ESTADO}}</td>
                        <td >
                            <form action="{{url('/seguimiento/no')}}" method="POST" >
                                @csrf
                                <input type="hidden" value="{{$item->INA_CODIGO}}" name="codigo"> 
                                <input type="submit" value="Correo No Respondido" class="btn btn-danger"> 
                            </form>
                        </td> 
                        <td> <form action="{{url('/seguimiento/respuesta')}}" method="POST" >
                            @csrf
                            <input type="hidden" value="{{$item->INA_CODIGO}}" name="codigo"> 
                            <input type="submit" value="Correo Respondido" class="btn btn-success"> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
   
               @else
               <tr>
                   <td class="h3 text-center font-italic" colspan="5">No Hay Inasistencias Por Mostrar</td>
               </tr>
               @endif
            </tbody>   
        </table>
    </div>
  </div>
@endsection