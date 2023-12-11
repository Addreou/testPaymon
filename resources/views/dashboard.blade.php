<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inicio
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between p-6 text-gray-900 space-y-4">
                    <div>
                        Bienvenido.
                    </div>
                    @canany(['test_developer','test_admin'])
                    <div>
                        <a href="{{ route('create_video') }}" class="p-2 rounded-md bg-green-700 hover:bg-green-500 text-white">
                            Nuevo
                        </a>
                    </div>
                    @endcanany
                </div>
                <div class="p-6">
                    @livewire('viewvideos')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
