<div>
    <x-slot name="header">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-jet-nav-link class="text-xl" href="{{ route('module0/menu0/inscripciones') }}" :active="request()->routeIs('module0/menu0/inscripciones')">
                {{ __('Inscripciones') }}
            </x-jet-nav-link>
            <x-jet-nav-link class="text-xl" href="{{ route('module0/menu0/ordensalida') }}" :active="request()->routeIs('module0/menu0/ordensalida')">
                {{ __('Orden de salida') }}
            </x-jet-nav-link>
        </div>
    </x-slot>
</div>