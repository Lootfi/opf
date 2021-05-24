<div>
    <form wire:submit.prevent="searchClient">
        <div class="mb-5">
            <label for="firstname" class="font-bold mb-1 text-gray-700 block">Nom du
                Client</label>
            <input type="text" wire:model="search"
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                placeholder="ex. Abdallah Lotfi">
        </div>
    </form>
    <div>
        @isset($clients)
        <div class="flex flex-row flex-wrap overflow-auto h-32">
            @foreach ($clients as $client)
            <a @click="doneChoisirClient = true" wire:click="chooseClient({{$client->id}})" href="#"
                class="flex-shrink-0 group block">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block h-9 w-9 rounded-full" src="{{$client->profile_photo_url}}"
                            alt="{{$client->name}}">
                    </div>
                    <div class="ml-1 mr-5">
                        <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                            {{$client->name}}
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
