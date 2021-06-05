<div>
    <div>
        <div class="mx-auto py-10">

            {{-- <div>
                <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                    <div>
                        <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" /></svg>

                        <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Registration
                            Success</h2>

                        <div class="text-gray-600 mb-8">
                            Thank you. We have sent you an email to demo@demo.test. Please click the
                            link in the message to activate your account.
                        </div>

                        <button
                            class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Back
                            to home</button>
                    </div>
                </div>
            </div> --}}

            <div>

                {{-- <!-- Content --> --}}
                <div class="py-10">


                    {{-- First Step --}}
                    @if (@isset($proprietaire))
                    <div class="px-4 py-5 sm:px-6">
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Information Propriétaire
                        </p>
                    </div>
                    <div class="border-t border-gray-200 px-4 pt-5 mb-20 sm:p-0">
                        <dl class="sm:divide-y sm:divide-gray-200">
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Full name
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$proprietaire->user->name}}
                                </dd>
                            </div>
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Email address
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$proprietaire->user->email}}
                                </dd>
                            </div>
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Adresse
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$proprietaire->adresse}}
                                </dd>
                            </div>
                            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Lieu et date de Naissance
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$proprietaire->lieu_naiss}}
                                    <br>
                                    {{Carbon\Carbon::parse($proprietaire->date_naiss)->format('l jS \of F Y')}}
                                </dd>
                            </div>
                        </dl>
                    </div>
                    @else
                    <x-jet-form-section submit="addProprietaire">
                        <x-slot name="title">
                            {{ __('Choisir Propriétaire') }}
                        </x-slot>

                        <x-slot name="description">
                            {{ __('Choisir Le Propriétaire à partier de leurs nom.') }}
                        </x-slot>
                        <x-slot name="form">
                            <div class="col-span-6 sm:col-span-4">
                                <form wire:submit.prevent="searchCitoyen">
                                    <div class="mb-5">
                                        <label for="firstname" class="font-bold mb-1 text-gray-700 block">Nom du
                                            Propriétaire</label>
                                        <x-jet-input type="text" wire:model="search"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="ex. Abdallah Lotfi" />
                                    </div>
                                </form>
                                <div>
                                    @isset($citoyens)
                                    <div class="flex flex-row flex-wrap overflow-auto h-32">
                                        @foreach ($citoyens as $citoyen)
                                        <a wire:click="chooseProprietaire({{$citoyen}})" href="#choisir_propriete"
                                            class="flex-shrink-0 group block">
                                            <div class="flex items-center">
                                                <div>
                                                    <img class="inline-block h-9 w-9 rounded-full"
                                                        src="{{$citoyen->profile_photo_url}}" alt="{{$citoyen->name}}">
                                                </div>
                                                <div class="ml-1 mr-5">
                                                    <p
                                                        class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
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
                        </x-slot>
                        {{-- <div>
                            <div>@livewire('citoyens.search',key('choisir_proprietaire_' . $id_proprietaire))</div>
                        </div>
                        <div>
                            <div>
                                <button wire:click="reset_proprietaire">back</button>
                                <div>
                                    @livewire('citoyens.card', ['citoyen_id' => $id_proprietaire],
                                    key("card_citoyen_".$id_proprietaire))
                                </div>
                            </div>
                        </div> --}}
                    </x-jet-form-section>
                    @endif
                    {{-- /First Step --}}



                    {{-- Second Step --}}
                    <div id="choisir_propriete">
                        @isset($proprietaire)
                        @if (@isset($propriété))
                        <div class="px-4 py-5 sm:px-6">
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Information Propriété
                            </p>
                        </div>
                        <div class="border-t border-gray-200 px-4 pt-5 mb-20 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Numero
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$propriété->numero}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Rue
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$propriété->rue}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Commune
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$propriété->commune}}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                        @else
                        <x-jet-form-section submit="addPropriete">
                            <x-slot name="title">
                                {{ __('Choisir Propriété de') }} {{$proprietaire->user->name}}
                            </x-slot>

                            <x-slot name="description">
                                {{ __('Update your account\'s profile information and email address.') }}
                            </x-slot>
                            <x-slot name="form">
                                <div class="mb-5 col-span-6 sm:col-span-4">
                                    <div class="flex flex-col">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                                <div
                                                    class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                                    <table class="min-w-full divide-y divide-gray-200">
                                                        <thead class="bg-gray-50">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                    Type
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                                    Adresse
                                                                </th>
                                                                <th scope="col" class="relative px-6 py-3">
                                                                    <span class="sr-only">Choisir</span>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @isset($propriétés)

                                                            @foreach ($propriétés as $propriété)
                                                            <tr class="bg-white hover:bg-indigo-100 hover:text-black">
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                                    {{$propriété->type}}
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                                                    {{$propriété->numero}}<br>{{$propriété->rue}}<br>{{$propriété->commune}}

                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                    <a href="#choose_client"
                                                                        class="text-indigo-600 hover:text-indigo-900"
                                                                        wire:click="choosePropriete({{$propriété}})">Choisir</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @endisset
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </x-slot>
                        </x-jet-form-section>
                        @endif
                        @endisset
                    </div>
                    {{-- /Second Step --}}

                    {{-- Third Step --}}
                    <div id="choose_client">
                        @isset($propriété)
                        @if (@isset($client))
                        <div class="px-4 py-5 sm:px-6">
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Information Client
                            </p>
                        </div>
                        <div class="border-t border-gray-200 px-4 pt-5 mb-20 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Full name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$client->user->name}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$client->user->email}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Adresse
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$client->adresse}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Lieu et date de Naissance
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$client->lieu_naiss}}
                                        <br>
                                        {{Carbon\Carbon::parse($client->date_naiss)->format('l jS \of F Y')}}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                        @else
                        <x-jet-form-section submit="addClient">
                            <x-slot name="title">
                                {{ __('Choisir Client') }}
                            </x-slot>

                            <x-slot name="description">
                                {{ __('Update your account\'s profile information and email address.') }}
                            </x-slot>
                            <x-slot name="form">
                                <div class="col-span-6 sm:col-span-4">
                                    <form wire:submit.prevent="searchCitoyen">
                                        <div class="mb-5">
                                            <label for="firstname" class="font-bold mb-1 text-gray-700 block">Nom du
                                                Client</label>
                                            <x-jet-input type="text" wire:model="search"
                                                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                                placeholder="Abdallah Lotfi" />
                                        </div>
                                    </form>
                                    <div>
                                        @isset($citoyens)
                                        <div class="flex flex-row flex-wrap overflow-auto h-32">
                                            @foreach ($citoyens as $citoyen)
                                            <a wire:click="chooseClient({{$citoyen}})" href="#choose_operation_type"
                                                class="flex-shrink-0 group block">
                                                <div class="flex items-center">
                                                    <div>
                                                        <img class="inline-block h-9 w-9 rounded-full"
                                                            src="{{$citoyen->profile_photo_url}}"
                                                            alt="{{$citoyen->name}}">
                                                    </div>
                                                    <div class="ml-1 mr-5">
                                                        <p
                                                            class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                                            {{$citoyen->name}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                        @endisset
                                    </div>
                                </div>
                            </x-slot>
                        </x-jet-form-section>
                        @endif
                        @endisset
                    </div>
                    {{-- /Third Step --}}
                    {{-- Fourth Step --}}

                    <div id="choose_operation_type">
                        @isset($client)
                        @if (@isset($debut_location,$fin_location))
                        <div class="px-4 py-5 sm:px-6">
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Type Opération
                            </p>
                        </div>
                        <div class="border-t border-gray-200 px-4 pt-5 mb-20 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Type
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$type}}
                                    </dd>
                                </div>
                                @if ($type == 'louer')
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Date début location
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{Carbon\Carbon::parse($debut_location)->format('l jS \of F Y')}}
                                    </dd>
                                </div>
                                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Date fin location
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{Carbon\Carbon::parse($fin_location)->format('l jS \of F Y')}}
                                    </dd>
                                </div>
                                @endif
                            </dl>
                        </div>
                        @else
                        <x-jet-form-section submit="addClient">
                            <x-slot name="title">
                                {{ __('Choisir Type d\'opération') }}
                            </x-slot>

                            <x-slot name="description">
                                {{ __('Update your account\'s profile information and email address.') }}
                            </x-slot>
                            <x-slot name="form">
                                <div class="col-span-6 sm:col-span-4">
                                    <select id="location" wire:model="type"
                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                        <option value="vente">Vente</option>
                                        <option value="louer">Location</option>
                                        <option value="donation">Donation</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    @if ($type == 'louer')
                                    <div class="grid grid-cols-3">
                                        <label for="card-expiration-date" class="whitespace-nowrap col-span-1">Début
                                            Location</label>
                                        <input wire:model="debut_location" type="date" min="<?php
                                        echo date('Y-m-d');
                                    ?>" class="col-span-2 focus:ring-indigo-500 focus:border-indigo-500 relative block w-full rounded-md bg-transparent focus:z-10 sm:text-sm border-gray-300">
                                    </div>
                                    <div class="grid grid-cols-3">
                                        <label for="card-expiration-date" class="col-span-1 whitespace-nowrap">Fin
                                            Location</label>
                                        <input wire:model="fin_location" type="date" min="{{$debut_location}}"
                                            class="col-span-2 focus:ring-indigo-500 focus:border-indigo-500 relative block w-full rounded-md bg-transparent focus:z-10 sm:text-sm border-gray-300">
                                    </div>
                                    @endif
                                </div>
                            </x-slot>
                        </x-jet-form-section>
                        @endif
                        @endisset
                    </div>

                    <div id="confirm_operation">
                        @isset($client,$proprietaire,$propriété)
                        @if ($type == 'louer')
                        @isset($debut_location,$fin_location)
                        <div>
                            <button wire:click="confirmOperation"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Confimer l'opération
                            </button>
                        </div>
                        @endisset
                        @else
                        <div>
                            <button wire:click="confirmOperation"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Confimer l'opération
                            </button>
                        </div>
                        @endif
                        @endisset
                    </div>

                    {{-- <div>
                        <div>@livewire('operations.confirmer', key('confirmation_operation_'.$id_proprietaire))</div>
                    </div> --}}

                    {{-- /Fourth Step --}}

                </div>
                {{-- <!-- / Step Content --> --}}
            </div>
        </div>
    </div>

</div>
