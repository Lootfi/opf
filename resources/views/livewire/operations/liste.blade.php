<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Identifiant
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Client
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Propriétaire
                            </th>
                            @if (in_array(auth()->user()->role, ['responsable','citoyen']))
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Notaire
                            </th>
                            @endif
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Etat
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                Options
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($operations as $operation)
                        <tr class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$operation->id}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$operation->client->user->name}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$operation->proprietaire->user->name}}
                            </td>
                            @if (in_array(auth()->user()->role, ['responsable','citoyen']))
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{$operation->notaire->user->name}}
                            </td>
                            @endif
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @switch($operation->status)
                                @case("enattente")
                                <span>En attente</span>
                                @break
                                @case("refuse")
                                <div class="group relative flex flex-col items-center">
                                    <span class="text-red-600">Refusée</span>
                                    <div
                                        class="absolute bottom-0 flex-col items-center opacity-0 mb-6 group-hover:opacity-100">
                                        <span
                                            class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">
                                            refusée {{$operation->updated_at->diffForHumans()}} [
                                            {{$operation->updated_at}} ]</span>
                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                    </div>
                                </div>
                                @break
                                @case('verifie')
                                <div class="group relative flex flex-col items-center">
                                    <span class="text-green-600">Validée</span>
                                    <div
                                        class="absolute bottom-0 flex-col items-center opacity-0 mb-6 group-hover:opacity-100">
                                        <span
                                            class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-indigo-600 rounded-md shadow-lg">
                                            validée {{$operation->updated_at->diffForHumans()}} par
                                            {{$operation->responsable->user->name}} [
                                            {{$operation->updated_at}} ]</span>
                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                    </div>
                                </div>
                                @endswitch
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                @switch($operation->status)
                                @case("enattente")
                                <a href="{{ url('/operations/'.$operation->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900">Informations</a>
                                @break
                                @case("refuse")
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                                @break
                                @case('verifie')
                                <a href="{{ url('operations/'.$operation->id) }}"
                                    class="text-indigo-600 hover:text-indigo-900">Fiche Foncière</a>
                                @endswitch
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
