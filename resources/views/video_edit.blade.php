<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nuevo Video
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    Crear registro del video
                </div>
                <form method="POST" action="{{ route('update_video',$Video->id) }}" class="space-y-4">
                    @method('PUT')
                    @csrf
                    @include('video_form')
                    <div class="space-x-6">
                        <a href="{{ route('dashboard') }}" class="p-2 rounded-md bg-red-700 hover:bg-red-500 text-white">Cancelar</a>
                        <button type="submit" class="p-2 rounded-md bg-green-700 hover:bg-green-500 text-white">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
