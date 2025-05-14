<!-- ====== header ====== -->

<header class="w-full z-50 bg-white/90 backdrop-blur">
    <nav class="fixed top-0 left-0 w-full z-20 bg-white/90 backdrop-blur border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3">
                <h1 class="text-2xl font-semibold whitespace-nowrap">MOB<span class="text-blue-700">ILITE</span></h1>
            </a>

            <!-- Bouton burger à ajouter ici pour mobile -->

            <div class="hidden w-full md:flex md:w-auto" id="navbar-sticky">
                <ul class="flex flex-col md:flex-row md:space-x-8 font-medium">
                    <li><a href="{{ route('home') }}" class="block py-2 px-3 text-blue-700">Home</a></li>
                    <li><a href="{{ route('about') }}" class="block py-2 px-3 text-gray-900 hover:text-blue-700">About</a></li>
                    <li><a href="{{ route('services') }}" class="block py-2 px-3 text-gray-900 hover:text-blue-700">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="block py-2 px-3 text-gray-900 hover:text-blue-700">Contact</a></li>
                </ul>
            </div>

            <div class="flex space-x-3">
                @auth
                    <a href="{{ url('/dashboard') }}" class="bg-blue-800 text-white px-4 py-2 rounded-md hover:bg-blue-600">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="bg-blue-800 text-white px-4 py-2 rounded-md hover:bg-blue-600">Se connecter</a>
                @endauth
            </div>
        </div>
    </nav>
</header>

<!-- ====== END header ====== -->
