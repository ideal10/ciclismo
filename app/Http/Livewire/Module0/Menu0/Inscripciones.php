<?php

namespace App\Http\Livewire\Module0\Menu0;

use Livewire\Component;
use App\Models\Participante;
use App\Models\Categoria;

class Inscripciones extends Component
{

    public $name;
    public $id_personal;
    public $fecha_nacimiento;
    public $valor_inscripcion;

    public $saveMsg = null;

    private function dateToYear($date)
    {
        $dateArray = preg_split('/[-]/',$date);
        $yearStr = $dateArray[0];
        return intval($yearStr);
    }

    private function calcEdad($date1, $date2)
    {
        $year1 = $this->dateToYear($date1);
        $year2 = $this->dateToYear($date2);
        return $year1 - $year2;
    }

    public function submit()
    {
        $participante = new Participante;

        if($this->name == null || $this->id_personal == null || $this->fecha_nacimiento == null || $this->valor_inscripcion == null)
        {
            $this->saveMsg[0] = 'Asegurese de llenar todos los campos.';
            $this->saveMsg[1] = 'red';
            return;
        }

        $participante->nombre = $this->name;
        $participante->identificacion = $this->id_personal;
        $participante->fechaNacimiento = $this->fecha_nacimiento;
        $participante->edad = $this->calcEdad(now(), $this->fecha_nacimiento);
        $participante->valorInscripcion = $this->valor_inscripcion;

        $participantes = Participante::all();
        $participantes_array = $participantes->toArray();
        $participantes_count = count($participantes_array);
        if($participantes_count == 0)
            $participante->numeroAsignado = 1;
        else
        {
            $participante->numeroAsignado = ($participantes_array[$participantes_count - 1]['numeroAsignado']) + 1;
        }

        $participante->save();

        $this->saveMsg[0] = 'Participante ('.$participante->numeroAsignado.') guardado correctamente.';
        $this->saveMsg[1] = 'green';

    }

    public function render()
    {
        $categorias = array();
        $participantes = Participante::all();

        foreach($participantes as $participante)
        {
            if($participante->idCategoria != null)
            {
                $categoria = Categoria::withTrashed()->find($participante->idCategoria);
                if($categoria->trashed())
                    $categorias[$participante->id] = 'Sin Asignar';
                else
                {
                    $categorias[$participante->id] = $categoria->nombre;
                }
            }
            else
            {
                $categorias[$participante->id] = 'Sin Asignar';
            }
        }

        return view('livewire.module0.menu0.inscripciones', ['participantes' => $participantes, 'categorias' => $categorias]);
    }
}
