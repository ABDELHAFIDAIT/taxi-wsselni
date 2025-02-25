@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-blue-600 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-blue-600 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">Trouvez votre</span>
                            <span class="block text-yellow-400">chauffeur idéal</span>
                        </h1>
                        <p class="mt-3 text-base text-blue-100 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Des chauffeurs professionnels et expérimentés pour vos trajets interurbains en toute sécurité.
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGF4aSUyMGRyaXZlcnxlbnwwfDB8MHx8fDI%3D" alt="Chauffeur de taxi">
        </div>
    </div>

    <!-- Search Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Search by Name -->
        <div class="mb-8">
            <div class="max-w-xl mx-auto">
                <div class="relative">
                    <input type="text" placeholder="Rechercher un chauffeur par nom ou prénom..." class="w-full px-4 py-3 pl-12 pr-8 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Form -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-12">
            <form class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- City Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Ville</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Sélectionnez une ville</option>
                        <option value="casablanca">Casablanca</option>
                        <option value="rabat">Rabat</option>
                        <option value="marrakech">Marrakech</option>
                        <option value="fes">Fès</option>
                        <option value="tanger">Tanger</option>
                    </select>
                </div>

                <!-- Date Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                    <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Time Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Heure</label>
                    <input type="time" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </form>
        </div>

        <!-- Drivers Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Driver Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Driver" class="w-20 h-20 rounded-full border-4 border-blue-100">
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold text-gray-900">Mohammed Alami</h3>
                            <p class="text-sm text-gray-500">Membre depuis Janvier 2024</p>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-phone mr-2 text-blue-600"></i>
                            <span>+212 6XX-XXXXXX</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-star mr-2 text-yellow-400"></i>
                            <span>4.8 (120 avis)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Driver Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Driver" class="w-20 h-20 rounded-full border-4 border-blue-100">
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold text-gray-900">Hassan Benjelloun</h3>
                            <p class="text-sm text-gray-500">Membre depuis Mars 2024</p>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-phone mr-2 text-blue-600"></i>
                            <span>+212 6XX-XXXXXX</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-star mr-2 text-yellow-400"></i>
                            <span>4.9 (85 avis)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Driver Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Driver" class="w-20 h-20 rounded-full border-4 border-blue-100">
                        <div class="ml-4">
                            <h3 class="text-xl font-semibold text-gray-900">Karim Tazi</h3>
                            <p class="text-sm text-gray-500">Membre depuis Février 2024</p>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-phone mr-2 text-blue-600"></i>
                            <span>+212 6XX-XXXXXX</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-star mr-2 text-yellow-400"></i>
                            <span>4.7 (95 avis)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection