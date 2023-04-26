<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\WithPagination;
use Livewire\Component;

class BusquedaAgencias extends Component
{

    use WithPagination;

    public $buscar ="";
    public $select1 ="";

    public $sort= 'id';
    public $direccion = 'asc';



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
            ->orderBy($this->sort, $this->direccion)
            ->paginate(10);


      //  return view('livewire.busqueda-agencias', compact('agencias') );
        return view('livewire.busqueda-agencias', ['agencias' => $agencias] );
     }

     public function order( $sort)
    {
        if($this->sort == $sort)
        {
            if($this->direccion == "asc")
            {
                $this->direccion = "desc";
            }else
            {
                $this->direccion = "asc";
            }
        }
        else
        {
            $this->sort =$sort;
            $this->direccion = "asc";
        }

    }



}
