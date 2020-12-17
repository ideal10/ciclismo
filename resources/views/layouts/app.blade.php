<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }} - {{ config('app.name', 'Ciclismo') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/ico">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <style>
            .navbar {
                overflow: hidden;
                background-color: #333;
            }
            .dropdown {
                float: left;
                overflow: hidden;
            }

            .dropdown .dropbtn {
                font-size: 16px;  
                border: none;
                outline: none;
                color: white;
                padding: 14px 16px;
                background-color: inherit;
                font-family: inherit;
                margin: 0;
            }

            .dropdown:hover .dropbtn {
                background-color: red;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                float: none;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {
                background-color: #ddd;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }
        </style>
    </head>
    <body class="font-sans antialiased overflow-hidden">
        <div class="min-h-screen" style="background-color:#222;">

            <div class="flex">
                <img src="{{ asset('images/Ciclismo-Banner1.png') }}">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 pl-5 my-1 sm:-my-px sm:flex" style="padding-top:40px;">
                    <div class="navbar">
                        <x-dropdown-nav-menu>
                            <x-slot name="displayname">
                                {{ __('Insumos') }}
                            </x-slot>

                            <x-dropdown-nav-link href="{{ route('carrera.index') }}">
                                {{ __('Categorias') }}
                            </x-dropdown-nav-link>

                            <x-dropdown-nav-link href="{{ route('tercero.index') }}">
                                {{ __('Terceros') }}
                            </x-dropdown-nav-link>
                        </x-dropdown-nav-menu>
                        <x-dropdown-nav-menu>
                            <x-slot name="displayname">
                                {{ __('Procesos') }}
                            </x-slot>

                            <x-dropdown-nav-link href="{{ route('carrera.index') }}">
                                {{ __('Nueva Carrera') }}
                            </x-dropdown-nav-link>

                            <x-dropdown-nav-link href="{{ route('carrera.index') }}">
                                {{ __('Orden de salida') }}
                            </x-dropdown-nav-link>

                            <x-dropdown-nav-link href="{{ route('carrera.index') }}">
                                {{ __('Orden de llegada') }}
                            </x-dropdown-nav-link>

                            
                        </x-dropdown-nav-menu>
                        <x-dropdown-nav-menu>
                            <x-slot name="displayname">
                                {{ __('Informes') }}
                            </x-slot>

                            <x-dropdown-nav-link href="{{ route('carrera.index') }}">
                                {{ __('Carreras') }}
                            </x-dropdown-nav-link>
                            <x-dropdown-nav-link href="{{ route('carrera.index') }}">
                                {{ __('Tiempos en Carreras') }}
                            </x-dropdown-nav-link>
                            <x-dropdown-nav-link href="{{ route('carrera.index') }}">
                                {{ __('Indexar Carreras') }}
                            </x-dropdown-nav-link>
                        </x-dropdown-nav-menu>
                    </div>
                </div>
            </div>

            <!-- Page Heading -->
            <header style="background-color:#333;">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-gray-200">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
