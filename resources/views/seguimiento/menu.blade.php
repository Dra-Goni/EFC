@extends('layout.header')
@section('titulo','Menu Roles')
@section('contenido')
@include('layout.navbar')
 
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("/")}}">Menu Principal</a></li>
     
        <li class="breadcrumb-item active " aria-current="page">Menu Control</li>
      </ol>
    </nav>
        
    <div class="container-fluid">
        <div class="row justify-content-center">

                <div class="col-12 ">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                          <div class="card-body d-flex flex-column align-items-start">
                             
                            <h3 class="mb-0">
                              <a class="text-dark" href="{{url("/seguimiento/historial")}}">Estados de las Inasistencias </a>
                            </h3>
                           
                            <p class="card-text mb-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto sapiente quam aut accusantium, dignissimos repellendus quisquam consequuntur eos harum, qui soluta cum quas. Dolor sapiente itaque vel laboriosam hic! Pariatur?</p>
                            <a href="{{url("/seguimiento/historial")}}">Ir al sitio</a>
                          </div>
                          <i class="fas fa-chess fa-10x"></i>
                          &nbsp;&nbsp;
                        </div>
                      </div>
               
                      <div class="col-12 ">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                          <div class="card-body d-flex flex-column align-items-start">
                             
                            <h3 class="mb-0">
                              <a class="text-dark" href="{{url("/seguimiento/cordinador")}}">Estados de las Inasistencias no Respondidas </a>
                            </h3>
                           
                            <p class="card-text mb-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto sapiente quam aut accusantium, dignissimos repellendus quisquam consequuntur eos harum, qui soluta cum quas. Dolor sapiente itaque vel laboriosam hic! Pariatur?</p>
                            <a href="{{url("/seguimiento/cordinador")}}">Ir al sitio</a>
                          </div>
                          <i class="fas fa-chess fa-10x"></i>
                          &nbsp;&nbsp;
                        </div>
                      </div>
               
                          
        

        </div>
    </div>
</div>     


@endsection