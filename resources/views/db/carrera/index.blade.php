<x-app-layout>
    <x-slot name="title">
        {{ __('Indexar Carreras') }}
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl bg-gray-800 text-white leading-tight">
            {{ __('Indexar Carreras') }}
        </h2>
    </x-slot>

    <div class="grid">
        <div class="bg-gray-700 text-white rounded-md m-3 box-content p-2">
            <a href="{{ route('carrera.create') }}">Crear Carrera</a>
        </div>
        <div class="bg-gray-700 text-white rounded-md m-6 box-content p-3">
            @if($carreras->isNotEmpty())
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="border border-white px-2 py-1">Titulo</th>
                            <th class="border border-white px-2 py-1">Subtitulo</th>
                            <th class="border border-white px-2 py-1">Fecha</th>
                            <th class="border border-white px-2 py-1">Lugar de inicio</th>
                            <th class="border border-white px-2 py-1">Valor inscripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carreras as $carrera)
                            <tr>
                                <td class="border border-white px-2 py-1">{{ $carrera->titulo }}</td>
                                <td class="border border-white px-2 py-1">{{ $carrera->subtitulo }}</td>
                                <td class="border border-white px-2 py-1">{{ $carrera->fecha_carrera }}
                                <td class="border border-white px-2 py-1">{{ $carrera->lugar_inicio }}</td>
                                <td class="border border-white px-2 py-1">${{ $carrera->valor_inscripcion }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h2 class="py-5 place-self-center text-xl">No hay carreras en la base de datos!</h2>
            @endif
        </div>
    </div>
</x-app-layout>