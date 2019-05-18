@extends('layout.header')
@section('titulo','Ver Cargo')
@section('contenido')
@include('layout.navbar')

    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url("/")}}">Menu Principal</a></li>
                
              <li class="breadcrumb-item" aria-current="page"><a href="{{url('/alumno/menu')}}">Menu Alumnos</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ver Todos los Alumnos</li>
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
            <h5>Todos Los Alumnos</h5>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                  
                    <th>Rut</th>
                    <th>Celular</th>
                    <th>Mail</th>
                </tr>
            </thead>
            <tbody>

                    @if(count($Alumno))
                    @foreach ($Alumno as $item)
                    <tr>
                        <td scope="row">{{$item->ALU_RUT}}</td>
                        <td>{{$item->ALU_CELULAR}}</td>
                        <td>{{$item->ALU_MAIL}}</td>
                        <td >
                            <form action="{{url('/alumno/eliminar',$item)}}" method="POST" >
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="submit" value="Eliminar" class="btn btn-danger"> 
                            </form>
                        </td> 
                        <td> <a href="{{url('/alumno/editar',$item) }}" class="btn btn-info">Editar</a></td>
                    </tr>
                    @endforeach
   
               @else
               <tr>
                   <td class="h3 text-center font-italic" colspan="2">No Hay Alumnos Por Mostrar</td>
               </tr>
               @endif
            </tbody>   
        </table>
    </div>
  </div>
@endsection