<?php

namespace App\Http\Livewire\Module0\Menu0;

use Livewire\Component;

class Ordensalida extends Component
{

    public $message = "Care about people's approval and you will be their prisoner.";

    public function submit()
    {
        $this->message = "To attain knowledge, add things every day; To attain wisdom, subtract things every day";
    }

    public function render()
    {
        return view('livewire.module0.menu0.ordensalida');
    }
}
