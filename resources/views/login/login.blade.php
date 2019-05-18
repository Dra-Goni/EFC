<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet"  href="{{ asset('css/Estilo.css')}}"/>
        <link rel="stylesheet"  href="{{ asset('css/bootstrap.css')}}"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    </head>
    <body class="weibo">    
        <br><br> 
       <form  method="POST" action="{{ url('/login') }}" class="container-fluid h-100 d-flex justify-content-center">
        @csrf
        <div class="card my-auto">
            <div class="card-header">
                <h3> Iniciar Sesion</h3>
                <div class="d-flex justify-content-end iconos-sociales">
                    <span><i class="fas fa-icicles"></i></span>
                </div>
            </div>
            <div class="card-body">
                    <form>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-air-freshener"></i></span>
                            </div>
                            <input type="text" class="form-control-lg rounded-0" placeholder="Correo Electronico" name="correo" >
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-angular"></i></span>
                            </div>
                            <input type="text" class="form-control-lg rounded-0" placeholder="Contraseña"  name="password" >
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right btn-warning">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                        <div class="d-flex justify-content-center">No tienes cuenta, Contacte con el administrador &nbsp; <span><i class="far fa-sad-tear"></i></span> </div>
                </div>
        </div>
    </div>  
    </form>
    </body>
</html>
