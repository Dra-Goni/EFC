<?php

namespace App\Http\Controllers;
use App\Alumnos;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return view('alumno.menu');
    }

    public function crear()
    {
        return view('alumno.crear');
    }

    public function create(Request $request)
    {
         
        Alumnos::create($request->all());
        return redirect('/alumno/historial')->with('msg', 'Alumno Creado Correctamente');
    }

    public function ver()
    {
        $Alumno = Alumnos::all();
        return view('alumno.historial', ['Alumno' => $Alumno]);
    }

    public function editar(Alumnos $Alumno)
    {
      
        return view('alumno.editar', ['Alumnos' => $Alumno]);
    }

    public function modificar(Request $request,Alumnos $Alumno)
    {
        $Alumno->update($request->all());
        return redirect('/alumno/historial')->with('msg', 'Alumno Editado Correctamente');
    }

    public function eliminar(Alumnos $Alumno)
    {
         
        $Alumno->delete();
        return redirect('/alumno/historial')->with('msg', 'Alumno Eliminado Correctamente');
    }

}
