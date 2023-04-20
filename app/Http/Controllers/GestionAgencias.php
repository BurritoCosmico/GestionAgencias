<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionAgencias extends Controller
{
    public function Agregar ( Request $request)
    {
        DB::table('agencias')->insert([
            [
             'nombre_agencia' => $request->nombre_agencia,
             'tipo_agencia' =>$request->tipo_agencia,
             'ciudad' => $request->ciudad,
             'estado' => $request->estado,
             'pais' => $request->pais,
             'nombre_cliente' => $request->nombre_cliente,
             'mail' => $request->mail,
             'telefono' => $request->telefono,
             'agency' => $request->agency,
             'fecha_compra' =>$request->fecha_compra,
             'modalidad' => $request->modalidad,
             'monto_pago' => $request->monto_pago,
             'vendedor' => $request->vendedor,
             'porcentaje' => $request->porcentaje,
            ]
          ]);

          return view('dashboard');
    }
}
