<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Informations Opération") }}
        </h2>
        <nav class="flex mt-3" aria-label="Breadcrumb">
            <ol class="bg-white rounded-md shadow px-6 flex space-x-4">
                <li class="flex">
                    <div class="flex items-center">
                        <a href="/dashboard" class="text-gray-400 hover:text-gray-500">
                            <!-- Heroicon name: solid/home -->
                            <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                            <span class="sr-only">Home</span>
                        </a>
                    </div>
                </li>

                <li class="flex">
                    <div class="flex items-center">
                        <i class="fas fa-angle-right"></i>
                        <a href="/operations"
                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Opérations</a>
                    </div>
                </li>

                <li class="flex">
                    <div class="flex items-center">
                        <i class="fas fa-angle-right"></i>
                        <p class="ml-4 text-sm font-medium" aria-current="page">Informations Opération</p>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('operations.show', ['operation' => $operation])
            </div>
        </div>
    </div>
</x-app-layout>
