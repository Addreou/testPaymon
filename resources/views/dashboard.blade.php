<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inicio
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                @can('test_developer')
                    <div class="p-6 text-gray-900">
                        Desarrollador
                    </div>
                @endcan
                @can('test_admin')
                    <div class="p-6 text-gray-900">
                        Administrador
                    </div>
                @endcan
                @can('test_user')
                    <div class="p-6 text-gray-900">
                        Usuario
                    </div>
                @endcan
            </div>
        </div>
    </div>
</x-app-layout>
