<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <nav class="flex mt-3" aria-label="Breadcrumb">
            <ol class="bg-white rounded-md shadow px-6 flex space-x-4">
                <li class="flex">
                    <div class="flex items-center">
                        <p class="">
                            <!-- Heroicon name: solid/home -->
                            <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                            <span class="sr-only">Home</span>
                        </p>
                    </div>
                </li>
            </ol>
        </nav>

    </x-slot>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Responsables des dépots
                    </div>
                </div>

                <div class="p-6 bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

                    @isset($responsables)
                    <ul class="fix-width grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @foreach ($responsables as $respo)
                        <li
                            class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                            <div class="flex-1 flex flex-col p-8">
                                <img class="w-32 h-32 flex-shrink-0 mx-auto bg-black rounded-full"
                                    src="{{$respo->user->profile_photo_url}}" alt="">
                                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{$respo->user->name}}</h3>
                                <dl class="mt-1 flex-grow flex flex-col justify-between">
                                    <dt class="sr-only">Role</dt>
                                    <dd class="mt-3">
                                        <span
                                            class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">Responsable
                                            de dépot</span>
                                    </dd>
                                </dl>
                            </div>
                            <div>
                                <div class="-mt-px flex divide-x divide-gray-200">
                                    <div class="w-0 flex-1 flex">
                                        <a href="mailto:{{$respo->user->email}}"
                                            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                                            <!-- Heroicon name: solid/mail -->
                                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                            </svg>
                                            <span class="ml-3">Email</span>
                                        </a>
                                    </div>
                                    <div class="-ml-px w-0 flex-1 flex">
                                        <a href="/messenger"
                                            class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                                            <!-- Heroicon name: solid/phone -->

                                            <svg class="w-5 h-5 text-gray-400" viewBox="0 0 512 512.0002"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m256 0c-141.484375 0-256 114.496094-256 256 0 44.902344 11.710938 88.757812 33.949219 127.4375l-32.984375 102.429688c-2.300782 7.140624-.410156 14.96875 4.894531 20.273437 5.253906 5.253906 13.0625 7.214844 20.273437 4.894531l102.429688-32.984375c38.679688 22.238281 82.535156 33.949219 127.4375 33.949219 141.484375 0 256-114.496094 256-256 0-141.484375-114.496094-256-256-256zm0 472c-40.558594 0-80.09375-11.316406-114.332031-32.726562-4.925781-3.078126-11.042969-3.910157-16.734375-2.078126l-73.941406 23.8125 23.8125-73.941406c1.804687-5.609375 1.042968-11.734375-2.082032-16.734375-21.40625-34.238281-32.722656-73.773437-32.722656-114.332031 0-119.101562 96.898438-216 216-216s216 96.898438 216 216-96.898438 216-216 216zm25-216c0 13.804688-11.191406 25-25 25s-25-11.195312-25-25c0-13.808594 11.191406-25 25-25s25 11.191406 25 25zm100 0c0 13.804688-11.191406 25-25 25s-25-11.195312-25-25c0-13.808594 11.191406-25 25-25s25 11.191406 25 25zm-200 0c0 13.804688-11.191406 25-25 25-13.804688 0-25-11.195312-25-25 0-13.808594 11.195312-25 25-25 13.808594 0 25 11.191406 25 25zm0 0" />
                                            </svg>
                                            <span class="ml-3">Message</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    @endisset

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
