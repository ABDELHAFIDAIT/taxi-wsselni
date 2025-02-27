@extends('layouts.app')

@section('style')
<style>
    .glass-effect {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .profile-card {
        transition: transform 0.3s ease;
    }
    .profile-card:hover {
        transform: translateY(-5px);
    }
    .nav-link {
        transition: all 0.3s ease;
    }
    .nav-link:hover {
        transform: translateX(5px);
    }
    .gradient-button {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        transition: all 0.3s ease;
    }
    .gradient-button:hover {
        background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
        transform: translateY(-2px);
    }
    </style>
@endsection


@section('dashboard')





    <div class="flex-1 flex justify-center p-10">
        <!-- Profile Content -->
        <div class="flex flex-wrap gap-10">
            <div class="rounded-2xl bg-white shadow-lg glass-effect w-full">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Informations du Chauffeur</h3>
                    <div class="text-green-600 font-semibold text-lg pb-5">
                        <i class="fa-solid fa-location-dot mr-3"></i> Ville Actuelle{{-- --}}
                    </div>
                    <form method="POST" action="{{ route('driver.edit') }}">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div class="grid grid-cols-3 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Permis</label>
                                    <input name="permis" id="permis" type="text" value="{{ Auth::user()->permis }}" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Vehicule</label>
                                    <input name="vehicule" id="vehicule" type="text" value="{{ Auth::user()->vehicule }}" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Ville</label>
                                    <select name="city" id="city" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                                        <option value="">Agadir</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <button type="submit" class="gradient-button w-full md:w-auto px-6 py-3 text-white font-medium rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <i class="fas fa-save mr-2"></i>
                                Sauvegarder les modifications
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="rounded-2xl bg-white shadow-lg glass-effect w-full">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Informations personnelles</h3>
                    <form method="POST" action="{{ route('passenger.edit') }}">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                                    <input name="f_name" id="f_name" type="text" value="{{ Auth::user()->f_name }}" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                                    <input name="l_name" id="l_name" type="text" value="{{ Auth::user()->l_name }}" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                <input name="email" id="email" type="email" value="{{ Auth::user()->email }}" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                                <input name="phone" id="phone" type="tel" value="{{ Auth::user()->phone }}" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                            </div>
                        </div>
                        <div class="mt-8">
                            <button type="submit" class="gradient-button w-full md:w-auto px-6 py-3 text-white font-medium rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <i class="fas fa-save mr-2"></i>
                                Sauvegarder les modifications
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="rounded-2xl bg-white shadow-lg glass-effect w-full">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Réinitialisation du Mot de Passe</h3>
                    @error('success')
                        <div class="text-green-600 font-medium my-4">
                            {{ $message }}
                        </div>
                    @enderror
                    <form method="POST" action="{{ route('passenger.password') }}">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Mot de Passe Actuel</label>
                                <input name="old_password" id="old_password" type="password"  class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                                @error('old_password')
                                    <div class="text-red-600 font-light text-xs mt-4">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nouveau Mot de Passe</label>
                                <input name="password" id="password" type="password" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Confirmer le Mot de Passee</label>
                                <input name="password_confirmation" id="password_confirmation" type="password" class="w-full px-4 py-2 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                            </div>
                        </div>
                        <div class="mt-8">
                            <button type="submit" class="gradient-button w-full md:w-auto px-6 py-3 text-white font-medium rounded-xl shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <i class="fas fa-save mr-2"></i>
                                Sauvegarder les modifications
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection