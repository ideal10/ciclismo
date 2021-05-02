<div>
    @if($terceros->isNotEmpty())
        <div class="box-content p-5 w-auto mx-auto">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b dark:border-gray-500 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-500">
                                <thead class="bg-legacyblue-450 dark:bg-black-300">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-white uppercase tracking-wider">
                                            {{ __('Nombres') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-white uppercase tracking-wider">
                                            {{ __('Apellidos') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-white uppercase tracking-wider">
                                            {{ __('Identificación') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium dark:text-white uppercase tracking-wider">
                                            {{ __('Estado') }}
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">{{ __('Acciones') }}</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y dark:divide-gray-500 bg-legacyblue-50 dark:bg-black-300">
                                    @foreach($terceros as $tercero)
                                        <tr class="hover:bg-legacyblue-100 dark:hover:bg-black-400">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm dark:text-white">{{ $tercero->primer_nombre }}</div>
                                                <div class="text-sm dark:text-gray-400">{{ $tercero->segundo_nombre }}</div>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm dark:text-white">{{ $tercero->primer_apellido }}</div>
                                                <div class="text-sm dark:text-gray-400">{{ $tercero->segundo_apellido }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm dark:text-gray-400">
                                                {{ $tercero->identificacion }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if($tercero->trashed())
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-200 text-red-800">
                                                        {{ __('Inactivo') }}
                                                    </span>
                                                @else
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-200 text-green-800">
                                                        {{ __('Activo') }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <div class="inline-flex" style="width:160px;height:48px;">
                                                    <a href="{{ route('tercero.edit', ['tercero' => $tercero]) }}" class="text-indigo-600 hover:text-indigo-900 mx-4">
                                                        <img src="{{ asset('images/icons/edit-file.png') }}" alt="{{ __('Editar') }}">
                                                    </a>
                                                    <form action="{{ route('tercero.destroy', $tercero->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="text-indigo-600 hover:text-indigo-900 mx-4">
                                                            @if($tercero->trashed())
                                                                <img src="{{ asset('images/icons/undelete.png') }}" alt="{{ __('Restaurar') }}">
                                                            @else
                                                                <img src="{{ asset('images/icons/delete.png') }}" alt="{{ __('Eliminar') }}">
                                                            @endif
                                                        </button>
                                                    </form>
                                                </div>
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
            <h2 class="text-l text-white">No hay terceros en la base de datos!</h2>
        </div>
    @endif

    <div class="mt-4">
        {{ $terceros->links() }}
    </div>
</div>
