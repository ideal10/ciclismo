<?php

namespace App\Http\Livewire\Module0\Menu1;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Participante;

class Establecercategorias extends Component
{

    public $nombre;
    public $limite_inferior;
    public $limite_superior;

    public $saveMsg = null;

    public function eliminarCategoria($id)
    {
        Categoria::destroy($id);
    }

    public function refreshParticipantes()
    {
        $categorias = Categoria::withTrashed()->all();
        $participantes = Participante::all();

        foreach($categorias as $categoria)
        {
            $categoria->participantes = 0;

            foreach($participantes as $participante)
            {
                if($participante->edad >= $categoria->limite_inferior)
                    if($participante->edad <= $categoria->limite_superior)
                        if($categoria->trashed())
                        {
                            $participante->idCategoria = null;
                        }
                        else
                        {
                            $participante->idCategoria = $categoria->id;
                            $categoria->participantes++;
                        }

                        $participante->save();
            }

            $categoria->save();
        }
    }

    public function submit()
    {
        $categoria = new Categoria;

        if($this->nombre == null || $this->limite_inferior == null || $this->limite_superior == null)
        {
            $this->saveMsg[0] = 'Asegurese de llenar todos los campos.';
            $this->saveMsg[1] = 'red';
            return;
        }

        $categoria->nombre = $this->nombre;
        $categoria->limite_inferior = $this->limite_inferior;
        $categoria->limite_superior = $this->limite_superior;
        $categoria->participantes = 0;

        $categoria->save();

        $this->saveMsg[0] = 'Categoria ('.$this->nombre.') guardada correctamente.';
        $this->saveMsg[1] = 'green';

        $this->refreshParticipantes();

    }

    public function render()
    {
        return view('livewire.module0.menu1.establecercategorias', ['categorias' => Categoria::all()]);
    }
}
