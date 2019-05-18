@extends('layout.header')
@section('titulo','Menu Roles')
@section('contenido')
@include('layout.navbar')
 
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("/")}}">Menu Principal</a></li>
      </ol>
    </nav>
        
    <div class="container-fluid">
        <div class="row justify-content-center">

                <div class="col-12 ">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                          <div class="card-body d-flex flex-column align-items-start">
                             
                            <h3 class="mb-0">
                              <a class="text-dark" href="{{url("/rol/historial")}}">Registrar Inacistencias  </a>
                            </h3>
                           
                            <p class="card-text mb-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto sapiente quam aut accusantium, dignissimos repellendus quisquam consequuntur eos harum, qui soluta cum quas. Dolor sapiente itaque vel laboriosam hic! Pariatur?</p>
                            <a href="{{url("/cargo/historial")}}">Ir al sitio</a>
                          </div>
                          <i class="fas fa-chess fa-10x"></i>
                          &nbsp;&nbsp;
                        </div>
                      </div>
               
              <div class="col-12 ">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    
                    <h3 class="mb-0">
                      <a class="text-dark" href="{{url("/rol/crear")}}">Control De Seguimiento</a>
                    </h3>
                   
                    <p class="card-text mb-auto"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, reprehenderit dolore delectus totam vel natus sunt voluptates consequatur nam nostrum architecto qui, nihil minima quaerat magnam voluptate atque, non labore. </p>
                <a href="{{url("/cargo/crear")}}">Ir al sitio</a>
                  </div>
                  <i class="fas fa-chess-queen fa-10x"></i>
                  &nbsp;&nbsp;
                </div>
              </div>
                          
              <div class="col-12 ">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                      <div class="card-body d-flex flex-column align-items-start">
                        
                        <h3 class="mb-0">
                          <a class="text-dark" href="{{url("/rol/crear")}}">Reportes</a>
                        </h3>
                       
                        <p class="card-text mb-auto"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, reprehenderit dolore delectus totam vel natus sunt voluptates consequatur nam nostrum architecto qui, nihil minima quaerat magnam voluptate atque, non labore. </p>
                    <a href="{{url("/cargo/crear")}}">Ir al sitio</a>
                      </div>
                      <i class="fas fa-chess-queen fa-10x"></i>
                      &nbsp;&nbsp;
                    </div>
                  </div>


                  <div class="col-12 ">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                          <div class="card-body d-flex flex-column align-items-start">
                            
                            <h3 class="mb-0">
                              <a class="text-dark" href="{{url("/alumno/menu")}}">Registro De Alumnos</a>
                            </h3>
                           
                            <p class="card-text mb-auto"> Modulo que permite mantener actualizada la informacion de los alumnos. </p>
                        <a href="{{url("/alumno/menu")}}">Ir al sitio</a>
                          </div>
                          <i class="fas fa-chess-queen fa-10x"></i>
                          &nbsp;&nbsp;
                        </div>
                      </div>

        </div>
    </div>
</div>     


@endsection