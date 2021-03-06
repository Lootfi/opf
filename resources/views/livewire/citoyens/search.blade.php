<div class="col-span-6 sm:col-span-4">
    <form wire:submit.prevent="searchCitoyen">
        <div class="mb-5">
            <label for="firstname" class="font-bold mb-1 text-gray-700 block">Nom du
                Propriétaire</label>
            <input type="text" wire:model="search"
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                placeholder="ex. Abdallah Lotfi">
        </div>
    </form>
    <div>
        @isset($citoyens)
        <div class="flex flex-row flex-wrap overflow-auto h-32">
            @foreach ($citoyens as $citoyen)
            <a @click="doneChoisir = true" wire:click="chooseCitoyen({{$citoyen->id}})" href="#"
                class="flex-shrink-0 group block">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block h-9 w-9 rounded-full" src="{{$citoyen->profile_photo_url}}"
                            alt="{{$citoyen->name}}">
                    </div>
                    <div class="ml-1 mr-5">
                        <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                            {{$citoyen->name}}
                        </p>
                        {{-- <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                            Voir le profile
                        </p> --}}
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @endisset
    </div>
</div>
