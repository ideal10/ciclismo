<div>
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-jet-nav-link wire:onclick="seleccionarInscripciones" :active="request()->routeIs('module0/menu0')">
            <p class="text-xl">{{ __('Inscripciones') }}</p>
        </x-jet-nav-link>
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if($menuSeleccionado = 'inscripciones')
                    <livewire:module0.menu0.inscripciones />
                @endif
            </div>
        </div>
    </div>
</div>
