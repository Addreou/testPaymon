<div>
    <x-input-label for="title" :value="__('Título')" />
    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $Video->title ?? '')" required autofocus/>
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>
<div>
    <x-input-label for="main_character" :value="__('Personaje principal')" />
    <x-text-input id="main_character" class="block mt-1 w-full" type="text" name="main_character" :value="old('main_character', $Video->main_character ?? '')" required/>
    <x-input-error :messages="$errors->get('main_character')" class="mt-2" />
</div>
<div>
    <x-input-label for="type" :value="__('Tipo de video')" />
    <x-select id="type" class="block mt-1 w-full" name="type" required>
        <option value="">Seleccione una opcion.</option>
        <option value="{{ \App\Enums\TipoVideo::MUSICA->value }}" @selected(old('type', $Video->type ?? '') == \App\Enums\TipoVideo::MUSICA->value)>Música</option>
        <option value="{{ \App\Enums\TipoVideo::DEPORTE->value }}" @selected(old('type', $Video->type ?? '') == \App\Enums\TipoVideo::DEPORTE->value)>Deporte</option>
    </x-select>
    <x-input-error :messages="$errors->get('main_character')" class="mt-2" />
</div>
<div>
    <x-input-label for="description" :value="__('Descripciòn')" />
    <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description', $Video->description ?? '')" required/>
    <x-input-error :messages="$errors->get('description')" class="mt-2" />
</div>
<div>
    <x-input-label for="url" :value="__('URL')" />
    <x-text-input id="url" class="block mt-1 w-full" type="text" name="url" :value="old('url', $Video->url ?? '')" required/>
    <x-input-error :messages="$errors->get('url')" class="mt-2" />
</div>