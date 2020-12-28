<x-app-layout>
    <x-slot name="title">
        {{ __('Crear Carrera') }}
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Crear Carrera') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1">
        <div class="border-blue-500 text-white bg-legacyblue-900 dark:bg-black-300 rounded-md my-6 mx-auto box-content p-3" style="width:500px;">
            <form action="{{ route('carrera.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-2 gap-2">
                    <label for="titulo">Titulo:</label>
                    <input name="titulo" type="text" class="text-gray-500 bg-legacyblue-50 dark:bg-black-400 rounded-md box-content p-1">
                    
                    <label for="subtitulo">Subtitulo:</label>
                    <input name="subtitulo" type="text" class="text-gray-500 bg-legacyblue-50 dark:bg-black-400 rounded-md box-content p-1">

                    <label for="fecha_carrera">Fecha:</label>
                    <input name="fecha_carrera" type="date" class="text-gray-500 bg-legacyblue-50 dark:bg-black-400 rounded-md box-content p-1">
                
                    <label for="lugar_inicio">Lugar de inicio:</label>
                    <input name="lugar_inicio" type="text" class="text-gray-500 bg-legacyblue-50 dark:bg-black-400 rounded-md box-content p-1">
                
                    <label for="lugar_fin">Lugar de llegada:</label>
                    <input name="lugar_fin" type="text" class="text-gray-500 bg-legacyblue-50 dark:bg-black-400 rounded-md box-content p-1">
                
                    <label for="kilometros">Kilometros:</label>
                    <input name="kilometros" type="number" class="text-gray-500 bg-legacyblue-50 dark:bg-black-400 rounded-md box-content p-1">
                
                    <label for="valor_inscripcion">Valor inscripción:</label>
                    <input name="valor_inscripcion" type="number" class="text-gray-500 bg-legacyblue-50 dark:bg-black-400 rounded-md box-content p-1">
                
                </div>
                <input name="submit" type="submit" class="col-span-1 bg-green-500 text-white rounded-md box-content p-2 mt-2" value="Guardar">
            </form>
        </div>
    </div>
</x-app-layout>
