<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taxi Wsselni</title>
    <link rel="icon" type="image/png" href="{{ asset('taxi.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @yield('style')
</head>
<body class="bg-gray-50">
    @guest
        <!-- Navigation Guest -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="{{ route('homepage') }}" class="flex items-center">
                            <img src="{{ asset('logo.png') }}" alt="Logo" class="h-16">
                        </a>
                    </div>

                    <!-- Navigation Links - Desktop -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ route('homepage') }}" class="text-gray-700 hover:text-blue-600 font-medium">Accueil</a>
                        <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-600 font-medium">Services</a>
                        <a href="{{ route('chauffeurs') }}" class="text-gray-700 hover:text-blue-600 font-medium">Chauffeurs</a>
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('login') }}" class="px-4 py-2 rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300">Se Connecter</a>
                            <a href="{{ route('register') }}" class="px-4 py-2 rounded-md text-blue-600 border border-blue-600 hover:bg-blue-50 transition duration-300">S'inscrire</a>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button type="button" class="text-gray-700 hover:text-blue-600" aria-label="Toggle menu">
                            <i class="fas fa-bars text-2xl"></i>
                        </button>
                    </div>
                </div>

                <!-- Mobile Navigation Menu -->
                <div class="md:hidden hidden">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a href="{{ route('homepage') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md">Accueil</a>
                        <a href="{{ route('services') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md">Services</a>
                        <a href="{{ route('chauffeurs') }}" class="block px-3 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-md">Chauffeurs</a>
                        <div class="space-y-2 pt-2">
                            <a href="{{ route('login') }}" class="block px-3 py-2 text-center text-white bg-blue-600 hover:bg-blue-700 rounded-md">Se Connecter</a>
                            <a href="{{ route('register') }}" class="block px-3 py-2 text-center text-blue-600 border border-blue-600 hover:bg-blue-50 rounded-md">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    @endguest


    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">À propos</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Qui sommes-nous</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Notre mission</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Carrières</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Réservation</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Tarifs</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Zones desservies</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Chauffeurs</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Devenir chauffeur</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Avantages</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Formation</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">Support</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Urgence</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="flex space-x-6 mb-4 md:mb-0">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <p class="text-gray-400 text-sm">
                    © 2025 Taxi Wsselni. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle mobile menu
        const mobileMenuButton = document.querySelector('button[aria-label="Toggle menu"]');
        const mobileMenu = document.querySelector('.md\\:hidden.hidden');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    @yield('script')
</body>
</html>