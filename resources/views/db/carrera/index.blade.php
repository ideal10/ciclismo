<x-app-layout>
    <x-slot name="title">
        {{ __('Indexar Carreras') }}
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Carreras') }}
        </h2>
    </x-slot>

    <div class="flex">
        <div class="col-span-1 w-5/6">
            @isset($failure)
                <div class="bg-gray-700 text-white rounded-md m-3 box-content p-2">
                    <p class="bg-red-200 text-red-400 rounded-md m-3 box-content p-2">{{ $failure }}</p>
                </div>
            @endisset
            @isset($success)
                <div class="bg-gray-700 text-white rounded-md m-3 box-content p-2">
                    <p class="bg-emerald-200 text-green-400 rounded-md m-3 box-content p-2">{{ $success }}</p>
                </div>
            @endisset

            @if($carreras->isNotEmpty())
                <div class="box-content p-5">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Titulo') }}
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Fecha') }}
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Valor Inscripción') }}
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    {{ __('Lugar de inicio') }}
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">{{ __('Edit') }}</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach($carreras as $carrera)
                                                <tr class="bg-white hover:bg-gray-200">
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">{{ $carrera->titulo }}</div>
                                                        <div class="text-sm text-gray-500">{{ $carrera->subtitulo }}</div>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-500">{{ $carrera->fecha_carrera }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-500">{{ '$'.$carrera->valor_inscripcion }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        <div class="text-sm text-gray-500">{{ $carrera->lugar_inicio }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="{{ route('carrera.edit', ['carrera' => $carrera]) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Editar') }}</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-white rounded-md m-6 box-content p-3" style="background-color:#333;">
                    <h2 class="text-l text-white">No hay carreras en la base de datos!</h2>
                </div>
            @endif
        </div>
        <div class="col-span-1 w-1/6 box-content p-5 m-auto">
            <div class="table box-content p-3 rounded-md m-auto" style="background-color:#333;">
                <a href="{{ route('carrera.create') }}" class="table-row text-white"><img src="{{ asset('images/icons/add-file.png') }}" alt="{{ __('Crear') }}"></a>
                <a href="{{ route('dashboard') }}" target="_blank" class="table-row text-white"><img src="{{ asset('images/icons/new-window.png') }}" alt="{{ __('Nueva Ventana') }}"></a>
            </div>
        </div>
    </div>

</x-app-layout>
