<header x-data="{ mobileMenuOpen : false }"
    class="flex flex-wrap flex-row justify-between md:items-center md:space-x-4 bg-white py-6 px-6 relative">
    <div class="flex items-end flex-no-shrink text-white mr-6">
        <svg class="h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
        </svg>
        <span class="font-semibold text-xl tracking-tight text-gray-900">O P F</span>
    </div>
    <button @click="mobileMenuOpen = !mobileMenuOpen"
        class="inline-block md:hidden w-8 h-8 bg-gray-200 text-gray-600 p-1">
        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <nav class="absolute md:relative top-16 left-0 md:top-0 z-20 md:flex flex-col md:flex-row md:space-x-6 font-semibold w-full md:w-auto bg-white shadow-md rounded-lg md:rounded-none md:shadow-none md:bg-transparent p-6 pt-0 md:p-0"
        :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}" @click.away="mobileMenuOpen = false">
        <a href="#" class="block py-1 text-indigo-600 hover:underline">Home</a>
        <a href="#" class="block py-1 text-gray-600 hover:underline">About us</a>
        <a href="#" class="block py-1 text-gray-600 hover:underline">Services</a>
        <a href="#" class="block py-1 text-gray-600 hover:underline">Blog</a>
        <a href="#footer" class="block py-1 text-gray-600 hover:underline">Contact</a>
        @if (Route::has('login'))
        @auth
        <a href="{{ url('/dashboard') }}" class="block py-1 text-gray-600 underline ml-auto">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="block py-1 text-gray-600 underline lg:ml-auto">Log in</a>

        {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block py-1 text-gray-600 underline">Register</a>
        @endif --}}
        @endauth
        @endif
    </nav>
</header>
