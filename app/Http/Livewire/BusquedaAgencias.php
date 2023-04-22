<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class BusquedaAgencias extends Component
{

    public $buscar ="";
    public $select1 ="";

    public function render()
    {
        $agencias = DB::table('agencias')->where('nombre_agencia','like','%'.$this->buscar.'%')
                                         ->orwhere ('nombre_cliente','like','%'.$this->buscar.'%')
                                         ->orwhere ('tipo_agencia','like','%'.$this->buscar.'%')
                                         ->orwhere ('ciudad','like','%'.$this->buscar.'%')
                                         ->orwhere ('estado','like','%'.$this->buscar.'%')
                                         ->orwhere ('pais','like','%'.$this->buscar.'%')
                                         ->orwhere ('mail','like','%'.$this->buscar.'%')
                                         ->orwhere ('telefono','like','%'.$this->buscar.'%')
                                         ->orwhere ('agency','like','%'.$this->buscar.'%')
                                         ->orwhere ('fecha_compra','like','%'.$this->buscar.'%')
                                         ->orwhere ('modalidad','like','%'.$this->buscar.'%')
                                         ->orwhere ('monto_pago','like','%'.$this->buscar.'%')
                                         ->orwhere ('vendedor','like','%'.$this->buscar.'%')
                                         ->orwhere ('porcentaje','like','%'.$this->buscar.'%')
                                         ->orderBy('nombre_cliente')
                                        ->get();
      //  return view('livewire.busqueda-agencias', compact('agencias') );
        return view('livewire.busqueda-agencias', ['agencias' => $agencias] );
    }
}
