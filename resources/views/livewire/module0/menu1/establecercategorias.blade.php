<div class="px-10 py-10">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div name="nuevaCategoria" class="border-2 border-gray-300 bg-gray-300 rounded-md">
        <h2 class="pt-4 pb-8 pl-1">{{  __('Nueva Categoria') }}</h2>

        @if($saveMsg != null)
            <p class="{{ 'pl-2 pb-4 text-'.$saveMsg[1].'-500 text-l' }}"> {{ $saveMsg[0] }} </p>
        @endif

        <div class="pl-2 pb-2">
            <label for="name">Nombre:</label><br>
            <input class="box-border py-0.5 px-1.5 bg-gray-200 rounded-md" wire:model="nombre" type="text" placeholder="{{ __('Sub 20') }}">
        </div>

        <div class="pl-2 pb-2">
            <label for="name">Limite inferior:</label><br>
            <input class="box-border py-0.5 px-1.5 bg-gray-200 rounded-md" wire:model="limite_inferior" type="integer" placeholder="{{ __('15') }}">
        </div>

        <div class="pl-2 pb-2">
            <label for="name">Limite superior:</label><br>
            <input class="box-border py-0.5 px-1.5 bg-gray-200 rounded-md" wire:model="limite_superior" type="integer" placeholder="{{ __('20') }}">
        </div>

        <div class="pl-2 pt-4 pb-2"><input wire:click="submit" type="button" value="{{ __('Submit') }}" class="p-2 rounded-md"></div>
    </div>

    <br><hr class="border-t-3 border-gray-700 border-dashed"><br>
    
    <div name="refreshParticipantes" class="border-2 border-gray-300 bg-gray-300 rounded-md">
        <div class="pl-2 pt-4 pb-2"><input wire:click="refreshParticipantes" type="button" value="{{ __('Refresh') }}" class="p-2 rounded-md"></div>
    </div>

    <br><hr class="border-t-3 border-gray-700 border-dashed"><br>

    <div name="listaCategorias">
        @foreach ($categorias as $categoria)
            <div name="{{ 'categoria'.$categoria->id }}" class="border-2 bg-gray-300 pt-2 pl-2 rounded-md">
                <p>{{ 'Nombre: '.$categoria->nombre }}</p>
                <p>{{ 'Limite Inferior: '.$categoria->limite_inferior }}</p>
                <p>{{ 'Limite Superior: '.$categoria->limite_superior }}</p>
                <p>{{ 'Participantes: '.$categoria->participantes }}</p>
                <br>
                <button wire:click="eliminarCategoria({{$categoria->id}})" >{{ __('Eliminar Categoria') }}</button>
            </div>
            <br>
        @endforeach
    </div>

</div>
