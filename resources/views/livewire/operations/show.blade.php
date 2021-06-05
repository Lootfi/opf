<div>
    <div class="px-4 py-5 sm:px-6">
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Type Opération
        </p>
    </div>
    <div class="border-t border-gray-400 px-4 pt-5 mb-20 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Type
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->type}}
                </dd>
            </div>
            @if ($operation->type == 'louer')
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Date début location
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{Carbon\Carbon::parse($operation->debut_location)->format('l jS \of F Y')}}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Date fin location
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{Carbon\Carbon::parse($operation->fin_location)->format('l jS \of F Y')}}
                </dd>
            </div>
            @endif
        </dl>
    </div>












    <div class="px-4 py-5 sm:px-6">
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Information Propriétaire
        </p>
    </div>
    <div class="border-t border-gray-400 px-4 pt-5 mb-20 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Full name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->proprietaire->user->name}}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Email address
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->proprietaire->user->email}}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Adresse
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->proprietaire->adresse}}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Lieu et date de Naissance
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->proprietaire->lieu_naiss}}
                    <br>
                    {{Carbon\Carbon::parse($operation->proprietaire->date_naiss)->format('l jS \of F Y')}}
                </dd>
            </div>
        </dl>
    </div>









    <div class="px-4 py-5 sm:px-6">
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Information Propriété
        </p>
    </div>
    <div class="border-t border-gray-400 px-4 pt-5 mb-20 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Numero
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->propriete->numero}}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Rue
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->propriete->rue}}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Commune
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->propriete->commune}}
                </dd>
            </div>
        </dl>
    </div>










    <div class="px-4 py-5 sm:px-6">
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Information Client
        </p>
    </div>
    <div class="border-t border-b border-gray-400 px-4 pt-5 mb-20 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Full name
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->client->user->name}}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Email address
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->client->user->email}}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Adresse
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->client->adresse}}
                </dd>
            </div>
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Lieu et date de Naissance
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{$operation->client->lieu_naiss}}
                    <br>
                    {{Carbon\Carbon::parse($operation->client->date_naiss)->format('l jS \of F Y')}}
                </dd>
            </div>
        </dl>
    </div>

    <div>
        @if (auth()->user()->role == 'responsable')
        <div>
            <button wire:click="validateOperation"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Valider l'opération
            </button>
            <button wire:click="refuseOperation"
                class="w-full flex justify-center my-5 py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-indigo-600 bg-white hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Refusé l'opération
            </button>
        </div>
        @endif
    </div>
</div>
