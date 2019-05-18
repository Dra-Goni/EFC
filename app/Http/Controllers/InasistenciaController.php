<?php

namespace App\Http\Controllers;
use App\Inasistencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InasistenciaController extends Controller
{
    public function crear()
    {
        return view('inasistencia.crear');
    }

    public function create(Request $request)
    {
            $inasistencia = new Inasistencia();
            $inasistencia->INA_ASIGNATURA = $request->INA_ASIGNATURA;
            $inasistencia->INA_FECHA = $request->INA_FECHA;
            $inasistencia->INA_ALUMNO = $request->INA_ALUMNO;
            $inasistencia->INA_USUARIO = Auth::id();
            $inasistencia->INA_SECCION = $request->INA_SECCION;
            $inasistencia->INA_ESTADO = 'Pendiente';
            $inasistencia->save();
            return redirect('/inasistencia/crear')->with('msg', 'Registro Inasistencia Creado Correctamente');
    }
}
