<section class="space-y-6">
    <div class="flex justify-between items-center space-x-4">
            <x-input-label for="search" :value="__('Buscar')" />
            <x-text-input wire:model.live="search" placeholder="¿Qué desea buscar?" id="search" class="block mt-1 w-full" type="text" name="search"/>
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
                    <span class="opacity-50">Busquedas: {{$FirstVideo->statsSearches->count()}}</span>
                    <span class="opacity-50">Vistas: {{$FirstVideo->statsViews->count()}}</span>
                </div>
        </div>
        <div>
            <div class="grid space-y-6">
                @foreach ($Videos as $video)
                    <div class="flex justify-between items-center">
                        <div class="grid">
                            <label class="text-lg">{{$video->id}} - {{$video->title}}</label>
                            <span class="text-md">{{$video->main_character}}</span>
                            <span class="opacity-50">{{$video->description}}</span>
                        </div>
                        <div>
                            @if ($video->id != $FirstVideo->id)
                                <button wire:click="play('{{$video->id}}')" class="p-2 rounded-md bg-cyan-700 hover:bg-cyan-500 text-white content-center">Ver</button>
                            @endif
                            @livewire('actions-videos',['IdVideo'=> $video->id], key($video->pluck('id')->join(uniqid())))
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
