<?php

namespace App\Http\Livewire;

use App\Models\Agencia;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class VerFicha extends Component
{
    public $open = false;
    public $agencia;

    public function mount(Agencia $agencia)
    {
        $this->agencia = $agencia;
    }

    public function render()
    {
     //   $ficha = DB::table('agencias')->where('id',$this->modal)->get();
     //   return view('livewire.ver-ficha', ['fichas' => $ficha] );
       return view('livewire.ver-ficha');
    }

}
