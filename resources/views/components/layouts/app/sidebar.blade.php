<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head-main')
</head>

<body class="bg-gray-100 h-screen flex overflow-hidden">
    @include('partials.side-content')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Top Navigation -->
        <header class="bg-white shadow-sm z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center md:hidden">
                        <button id="sidebarToggle" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <div class="flex items-center">
                        <div class="relative">
                            <input
                                class="border border-gray-300 rounded-md py-2 pl-10 pr-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                type="text" placeholder="Rechercher...">
                            <div class="absolute left-3 top-2.5 text-gray-400">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <button id="notificationBtn" class="p-2 text-gray-500 hover:text-gray-700 mr-3 relative">
                                <i class="fas fa-bell"></i>
                                <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
                            </button>
                            <!-- Notification Dropdown -->
                            <div id="notificationDropdown"
                                class="absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg overflow-hidden z-20 transform scale-0 opacity-0 origin-top-right transition-all duration-200">
                                <div class="px-4 py-3 border-b border-gray-200">
                                    <div class="flex justify-between items-center">
                                        <h3 class="text-sm font-semibold text-gray-700">Notifications</h3>
                                        <span
                                            class="text-xs font-medium text-blue-600 cursor-pointer hover:text-blue-800">Marquer
                                            tout comme lu</span>
                                    </div>
                                </div>
                                <div class="max-h-72 overflow-y-auto">
                                    <div class="px-4 py-3 border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 bg-blue-500 rounded-full p-2 text-white">
                                                <i class="fas fa-gem text-xs"></i>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm font-medium text-gray-900">Nouveau projet créé</p>
                                                <p class="text-xs text-gray-500">Mine de Cuivre - Expansion Nord a été
                                                    créé avec succès.</p>
                                                <p class="text-xs text-gray-400 mt-1">Il y a 10 minutes</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 bg-green-500 rounded-full p-2 text-white">
                                                <i class="fas fa-file-alt text-xs"></i>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm font-medium text-gray-900">Rapport approuvé</p>
                                                <p class="text-xs text-gray-500">Le rapport mensuel d'exploitation a
                                                    été approuvé.</p>
                                                <p class="text-xs text-gray-400 mt-1">Il y a 1 heure</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 bg-yellow-500 rounded-full p-2 text-white">
                                                <i class="fas fa-exclamation text-xs"></i>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm font-medium text-gray-900">Maintenance programmée</p>
                                                <p class="text-xs text-gray-500">Maintenance pour Excavatrice Komatsu
                                                    PC8000 prévue.</p>
                                                <p class="text-xs text-gray-400 mt-1">Il y a 3 heures</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0 bg-red-500 rounded-full p-2 text-white">
                                                <i class="fas fa-exclamation-triangle text-xs"></i>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm font-medium text-gray-900">Alerte d'incident</p>
                                                <p class="text-xs text-gray-500">Un incident a été signalé sur le site
                                                    B - Intervention requise.</p>
                                                <p class="text-xs text-gray-400 mt-1">Il y a 5 heures</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-center">
                                    <a href="#" class="text-sm text-blue-600 font-medium hover:text-blue-800">Voir
                                        toutes les
                                        notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-3 relative">
                            <div class="flex items-center">
                                <img class="h-8 w-8 rounded-full"
                                    src="https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff"
                                    alt="Admin">
                                <span class="ml-2 hidden md:block">Admin</span>
                            </div>
                        </div>
                        <button id="logoutBtn" class="ml-4 text-gray-600 hover:text-red-600 flex items-center">
                            <i class="fas fa-sign-out-alt mr-1"></i>
                            <span class="hidden md:inline">Déconnexion</span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-3 sm:p-4 lg:p-6 bg-gray-100">
            {{ $slot }}
        </main>
    </div>
    @stack('js')
</body>

</html>
