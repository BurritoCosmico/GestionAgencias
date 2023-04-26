<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class VerFicha extends Component
{
    public $agencia;

    // public function mount( Post $agencia)
    // {
    //     $this->agencia = $agencia;
    // }

    public function render()
    {
        return view('livewire.ver-ficha');
    }
}
