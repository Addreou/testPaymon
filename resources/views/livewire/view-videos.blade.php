<section class="space-y-6">
    <div class="flex justify-between items-center space-x-4">
            <x-input-label for="search" :value="__('Buscar')" />
            <x-text-input id="search" class="block mt-1 w-full" type="text" name="search"/>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 space-y-8 md:space-y-0">
        <div>
            <iframe width="560" height="315" title="YouTube video player" frameborder="0"
                src="https://www.youtube.com/embed/{!! $FirstVideo->url !!}"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div class="grid">
                    <label class="text-lg">{{$FirstVideo->title}}</label>
                    <span class="text-md">{{$FirstVideo->main_character}}</span>
                    <span class="opacity-50">{{$FirstVideo->description}}</span>
                </div>
        </div>
        <div>
            <div class="grid space-y-6">
                @foreach ($Videos as $video)
                    <div class="flex justify-between items-center">
                        <div class="grid">
                            <label class="text-lg">{{$video->title}}</label>
                            <span class="text-md">{{$video->main_character}}</span>
                            <span class="opacity-50">{{$video->description}}</span>
                        </div>
                        <div>
                            
                            @if($IdConfirm===0)
                                <button class="p-2 rounded-md bg-cyan-700 hover:bg-cyan-500 text-white">Reproducir</button>
                                @canany(['test_developer','test_admin'])
                                    <a href="{{ route('edit_video',$video->id)}}" class="p-2 rounded-md bg-yellow-700 hover:bg-yellow-500 text-white">Editar</a>
                                @endcanany
                            @endif
                            <div wire:loading.remove class="relative flex items-center gap-2">
                                @if($IdConfirm!=0)
                                    <div class="relative flex flex-col items-center group">
                                        <button type="button"
                                                wire:click="delete('{{$video->id}}')"
                                                class="p-2 rounded-md bg-green-700 hover:bg-green-500 text-white">
                                            Confirmar
                                        </button>
                                    </div>
                                    <div class="relative flex flex-col items-center group">
                                        <button type="button"
                                                wire:click="confirm('0')"
                                                class="p-2 rounded-md bg-red-700 hover:bg-red-500 text-white">
                                            Cancelar
                                        </button>
                                    </div>
                                @else
                                    <div class="inline-flex group">
                                        <button type="button"
                                                wire:click="confirm('{{$video->id}}')"
                                                class="p-2 rounded-md bg-red-700 hover:bg-red-500 text-white">
                                            Eliminar
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
