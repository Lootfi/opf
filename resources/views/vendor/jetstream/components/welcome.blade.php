<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div class="mt-8 text-2xl">
        Responsables des dépots
    </div>
</div>

<div class="p-6 bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

    @isset($responsables)
    <ul class="fix-width grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($responsables as $respo)
        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
            <div class="flex-1 flex flex-col p-8">
                <img class="w-32 h-32 flex-shrink-0 mx-auto bg-black rounded-full"
                    src="{{$respo->user->profile_photo_url}}" alt="">
                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{$respo->user->name}}</h3>
                <dl class="mt-1 flex-grow flex flex-col justify-between">
                    <dt class="sr-only">Role</dt>
                    <dd class="mt-3">
                        <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">Responsable
                            de dépot</span>
                    </dd>
                </dl>
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                        <a href="mailto:janecooper@example.com"
                            class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
                            <!-- Heroicon name: solid/mail -->
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span class="ml-3">Email</span>
                        </a>
                    </div>
                    <div class="-ml-px w-0 flex-1 flex">
                        <a href="tel:+1-202-555-0170"
                            class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                            <!-- Heroicon name: solid/phone -->
                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span class="ml-3">Call</span>
                        </a>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    @endisset

</div>
