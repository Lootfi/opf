<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pré-inscription d\'une nouvelle opération') }}
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
                        <p class="ml-4 text-sm font-medium" aria-current="page">Pré-Inscrire une nouvelle opération</p>
                    </div>
                </li>
            </ol>
        </nav>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                <div class="h-screen">

                    <style>
                        [x-cloak] {
                            display: none;
                        }

                        [type="checkbox"] {
                            box-sizing: border-box;
                            padding: 0;
                        }

                        .form-checkbox,
                        .form-radio {
                            -webkit-appearance: none;
                            -moz-appearance: none;
                            appearance: none;
                            -webkit-print-color-adjust: exact;
                            color-adjust: exact;
                            display: inline-block;
                            vertical-align: middle;
                            background-origin: border-box;
                            -webkit-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                            flex-shrink: 0;
                            color: currentColor;
                            background-color: #fff;
                            border-color: #e2e8f0;
                            border-width: 1px;
                            height: 1.4em;
                            width: 1.4em;
                        }

                        .form-checkbox {
                            border-radius: 0.25rem;
                        }

                        .form-radio {
                            border-radius: 50%;
                        }

                        .form-checkbox:checked {
                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                            border-color: transparent;
                            background-color: currentColor;
                            background-size: 100% 100%;
                            background-position: center;
                            background-repeat: no-repeat;
                        }

                        .form-radio:checked {
                            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
                            border-color: transparent;
                            background-color: currentColor;
                            background-size: 100% 100%;
                            background-position: center;
                            background-repeat: no-repeat;
                        }

                    </style>

                    @livewire('operations.inscrire')
                </div>
            </div>
        </div>
</x-app-layout>
