<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Menu0 extends Component
{

    public $menuSeleccionado = '';

    public function seleccionarInscripciones()
    {
        $this->menuSeleccionado = 'inscripciones';
    }

    public function seleccionarOrdensalida()
    {
        $this->menuSeleccionado = 'ordensalida';
    }

    public function render()
    {
        return view('livewire.menu0');
    }
}
