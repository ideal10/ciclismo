<x-app-layout>
    <x-slot name="title">
        {{ __('Crear Tercero') }}
    </x-slot>

    <x-slot name="header">
        <div class="flex">
            <div class="col-span-1 w-5/6">
                <h2 class="font-semibold text-xl text-white my-auto">
                    {{ __('Crear Tercero') }}
                </h2>
            </div>

            <div class="col-span-1 w-1/6 box-content px-5">
                <div class="inline-flex box-content px-3 rounded-md m-auto" style="background-color:#333;">
                    <a href="{{ route('tercero.index') }}" class="text-white">
                        <img src="{{ asset('images/icons/back-arrow.png') }}" alt="{{ __('Volver') }}" class="w-8 h-8 mx-3">
                    </a>
                    <a href="{{ route('dashboard') }}" target="_blank" class="text-white">
                        <img src="{{ asset('images/icons/new-window.png') }}" alt="{{ __('Nueva Ventana') }}" class="w-8 h-8 mx-3">
                    </a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="grid grid-cols-1">
        <div class="text-white rounded-md my-6 mx-auto box-content p-3" style="background-color:#333;width:500px;">
            <form action="{{ route('tercero.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-2 gap-2">
                    <label for="primer_nombre">Primer Nombre:</label>
                    <input name="primer_nombre" type="text" class="text-gray-300 rounded-md box-content p-1" style="background-color:#444;">
                    
                    <label for="segundo_nombre">Primer Nombre:</label>
                    <input name="segundo_nombre" type="text" class="text-gray-300 rounded-md box-content p-1" style="background-color:#444;">

                    <label for="primer_apellido">Primer Nombre:</label>
                    <input name="primer_apellido" type="text" class="text-gray-300 rounded-md box-content p-1" style="background-color:#444;">
                
                    <label for="segundo_apellido">Primer Nombre:</label>
                    <input name="segundo_apellido" type="text" class="text-gray-300 rounded-md box-content p-1" style="background-color:#444;">
                
                    <label for="identificacion">Identificación:</label>
                    <input name="identificacion" type="number" class="text-gray-300 rounded-md box-content p-1" style="background-color:#444;">
                
                    <label for="tipo_identificacion">Tipo de Identificación:</label>
                    <input name="tipo_identificacion" type="text" class="text-gray-300 rounded-md box-content p-1" style="background-color:#444;">
                
                    <label for="telefono">Teléfono:</label>
                    <input name="telefono" type="text" class="text-gray-300 rounded-md box-content p-1" style="background-color:#444;">
                
                    <label for="direccion">Dirección:</label>
                    <input name="direccion" type="text" class="text-gray-300 rounded-md box-content p-1" style="background-color:#444;">
                    
                    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                    <input name="fecha_nacimiento" type="date" class="text-gray-300 rounded-md box-content p-1" style="background-color:#444;">
                </div>
                <input name="submit" type="submit" class="bg-green-500 text-gray-300 rounded-md box-content p-2 mt-2" value="Guardar">
            </form>
        </div>
    </div>
</x-app-layout>
