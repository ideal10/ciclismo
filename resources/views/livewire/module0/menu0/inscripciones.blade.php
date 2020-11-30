<div class="px-10 py-10">

    <div name="nuevoParticipante" class="border-2 border-gray-300 bg-gray-300 rounded-md">
        <h3 class="pt-4 pb-8 pl-1">{{  __('Nuevo Participante') }}</h3>

        @if($saveMsg != null)
            <p class="{{ 'pl-2 pb-4 text-'.$saveMsg[1].'-500 text-l' }}"> {{ $saveMsg[0] }} </p>
        @endif

        <div class="pl-2 pb-2">
            <label for="name">Nombre:</label><br>
            <input class="box-border py-0.5 px-1.5 bg-gray-200 rounded-md" wire:model="name" type="text" placeholder="{{ __('Jhon Doe') }}">
        </div>

        <div class="pl-2 pb-2">
            <label for="name">Identificación:</label><br>
            <input class="box-border py-0.5 px-1.5 bg-gray-200 rounded-md" wire:model="id_personal" type="text" placeholder="{{ __('xxxxxxxxxx') }}">
        </div>

        <div class="pl-2 pb-2">
            <label for="name">Fecha de nacimiento:</label><br>
            <input class="box-border py-0.5 px-1.5 bg-gray-200 rounded-md" wire:model="fecha_nacimiento" type="date" value="01-01-1970">
        </div>

        <div class="pl-2 pb-2">
            <label for="name">Valor Inscripción:</label><br>
            <input class="box-border py-0.5 px-1.5 bg-gray-200 rounded-md" wire:model="valor_inscripcion" type="number" placeholder="{{ __('10000') }}">
        </div>

        <div class="pl-2 pt-4 pb-2"><input wire:click="submit" type="button" value="{{ __('Submit') }}" class="p-2 rounded-md"></div>
    </div>

    <br><hr class="border-t-3 border-gray-700 border-dashed"><br>

    <div name="listaParticipantes">
        @foreach ($participantes as $participante)
            <div name="{{ 'participante'.$participante->id }}" class="border-2 bg-gray-300 pt-2 pl-2 rounded-md">
                <p>{{ 'Nombre: '.$participante->nombre }}</p>
                <p>{{ 'Identificación: '.$participante->identificacion }}</p>
                <p>{{ 'Fecha de nacimiento: '.$participante->fechaNacimiento }}</p>
                <p>{{ 'Edad: '.$participante->edad }}</p>
                <p>{{ 'Valor de la Inscripción: '.$participante->valorInscripcion }}</p>
                <p>{{ 'Numero asignado: '.$participante->numeroAsignado }}</p>
                <p>{{ 'Categoria: '.$categorias[$participante->id] }}</p>
            </div>
            <br>
        @endforeach
    </div>

</div>
