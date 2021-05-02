<?php

namespace App\Http\Livewire\Db\Tercero;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Tercero;

class Index extends Component
{

    use WithPagination;

    public $search_primer_nombre;
    public $search_segundo_nombre;
    public $search_primer_apellido;
    public $search_segundo_apellido;

    private $terceros;

    private $participantes;

    public $qty = 10;

    public function search()
    {
        $this->resetPage();

        $this->terceros = Tercero::withTrashed()->where([
            'primer_nombre' => $this->search_primer_nombre,
            'segundo_nombre' => $this->search_segundo_nombre,
            'primer_apellido' => $this->search_primer_apellido,
            'segundo_apellido' => $this->search_segundo_apellido
        ])->paginate($this->qty);
    }

    public function render()
    {
        $this->terceros = Tercero::withTrashed()->paginate($this->qty);

        return view('livewire.db.tercero.index', ['terceros' => $this->terceros]);
    }
}
