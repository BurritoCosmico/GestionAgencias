<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class BusquedaAgencias extends Component
{
    public function render()
    {
        $agencias = DB::table('agencias')->get();
      //  return view('livewire.busqueda-agencias', compact('agencias') );
        return view('livewire.busqueda-agencias', ['agencias' => $agencias] );
    }
}
