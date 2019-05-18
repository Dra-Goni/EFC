<?php

namespace App\Http\Controllers;
use App\Inasistencia;
use App\Respuesta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
{
    public function index()
    {
        return view('seguimiento.menu');
    }

    public function ver()
    {
        $Rut=Auth::id();
        $Inasistencia = Inasistencia::where('INA_USUARIO',$Rut)->where('INA_ESTADO', '=', 'Pendiente')->get();
        return view('seguimiento.historial', ['Inasistencia' => $Inasistencia]);
    }

    public function si(Request $request)
    {
        $ina= $request->codigo;
        $Inasistencia = Inasistencia::where('INA_CODIGO',$ina)->first();
        $Inasistencia->INA_ESTADO='RESPONDIDO';
        $Inasistencia->save();

        $Respuesta = new Respuesta();
        $Respuesta->RES_RESPUESTA = $request->codigo;
        $Respuesta->RES_INASISTENCIA = $ina;
        $Respuesta->save();

        return redirect('/seguimiento/historial')->with('msg', 'Respuesta Agregada Correctamente');
    }

    public function no(Request $request)
    {
        $ina= $request->codigo;
        $Inasistencia = Inasistencia::where('INA_CODIGO',$ina)->first();
        $Inasistencia->INA_ESTADO='No Respondido';
        $Inasistencia->save();
        return redirect('/seguimiento/historial')->with('msg', 'Inasistencia Enviada a Coordinador');
    }

    public function respuesta(Request $request)
    {
        $ina= $request->codigo;
        $Inasistencia = Inasistencia::findOrFail($ina);
        return view('seguimiento.respuesta', ['Inasistencia' => $Inasistencia]);
    }
}
