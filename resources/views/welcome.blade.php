<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex justify-end items-center space-x-4">
                <label class="font-semibold text-lg">Test Paymon</label>
            </div>
            <div>
                <label class="font-black text-xl">Bienvenido</label>
                <label class="text-xs">{{ Carbon\Carbon::now()->isoFormat('dddd, DD [de] MMMM [del] YYYY') }}</label>
            </div>
            <div class="grid text-gray-900">
                <label>Ing. Eduardo Mendoza Pérez</label>
                <label class="text-sm opacity-80">email: eduardomp.mendoza@gmail.com</label>
                <label class="text-sm opacity-80">cel: 753 130 05 36</label>
            </div>
            <div class="flex justify-between">
                <a class="rounded-md bg-green-800 text-white hover:bg-green-700 p-2" href="{{ route('register') }}">Registrar usuario</a>
                <a class="rounded-md bg-blue-800 text-white hover:bg-blue-700 p-2" href="{{ route('login') }}">Iniciar Sesión</a>
            </div>
        </div>
    </div>
</x-guest-layout>
