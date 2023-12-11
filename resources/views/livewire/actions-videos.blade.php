<div class="grid">
    @canany(['test_developer','test_admin'])
        <a href="{{ route('edit_video',$IdVideo)}}" class="p-2 rounded-md bg-yellow-700 hover:bg-yellow-500 text-white">Editar</a>
        <button type="button"
                wire:click="delete('{{$IdVideo}}')"
                class="p-2 rounded-md bg-red-700 hover:bg-red-500 text-white">
            Eliminar
        </button>
    @endcanany
</div>
