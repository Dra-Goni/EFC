<header class="navbar  navbar-light bg-light navbar-expand-lg sticky-top text-capitalize " role="navigation">
    <span class="navbar-brand">Agenda Me</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAgenda" aria-controls="navbarNavAgenda" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAgenda">
         <div class="navbar-nav mr-auto">
            <a class="nav-item linked text-sm-center" href="{{'/'}}">inicio  </a>
            {{-- <a class="nav-item linked text-sm-center" href="{{'/rol/menu'}}">Administrar Roles de Usuario</a> --}}
        
        </div>
        <div class="navbar-nav ml-auto">
             {{-- <a class="nav-item  linked text-sm-center" href="#contacto">Inicio de Session</a><span class="mt-1 d-none d-xl-block ">|</span> --}}
             <a class="nav-item  linked text-sm-center" href="{{url('/logout')}}">Cerrar Sesion </a>
         </div>
    </div>
</header>