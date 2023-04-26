<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    protected $listeners = ['display-modal'=> 'displaymodal'];

    public function displaymodal(){
        $this->dispatchBrowserEvent('show-modal');
    }


    public function render()
    {
        return view('livewire.modal');
    }
}
