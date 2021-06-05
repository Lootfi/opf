<main class="lg:relative">
    <div class="mx-auto max-w-7xl w-full pt-6 pb-20 text-center lg:my-20 lg:text-left">
        <div class="px-4 lg:w-1/2 sm:px-8 xl:pr-16">
            <h1
                class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-6xl">
                <span class="block xl:inline">La conservation foncière</span>
                <span class="block text-indigo-600 xl:inline">de Mostaganem</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">
                Un véritable service d’état civil des biens fonciers et immobiliers qui consigne l’ensemble des
                opérations juridiques dont ils font l’objet.
            </p>
            <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                    <a @auth href="{{ url('/dashboard') }}" @else href="{{ route('login') }}" @endauth
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                        Get started
                    </a>
                </div>
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                    <a href="#"
                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                        Savoir Plus
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative w-full h-64 sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 lg:h-full">
        <img class="absolute inset-0 w-full my-auto" src="/storage/organigrame.png" alt="">
    </div>
</main>
