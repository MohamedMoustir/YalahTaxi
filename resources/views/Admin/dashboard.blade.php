<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrandTaxiGo - Admin Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.12.0/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div x-data="{ sidebarOpen: false, currentStep: 1, currentPage: 'dashboard', showRouteForm: false }">
        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 z-30 w-64 bg-blue-800 text-white transform transition-transform duration-300 ease-in-out lg:translate-x-0"
            :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
            <div class="flex items-center justify-center h-16 border-b border-blue-700">
                <h1 class="text-xl font-bold">GrandTaxiGo Admin</h1>
            </div>
            <nav class="mt-5">
                <a @click="currentPage = 'dashboard'; sidebarOpen = false"
                    class="flex items-center px-6 py-3 text-white hover:bg-blue-700 cursor-pointer"
                    :class="{'bg-blue-700': currentPage === 'dashboard'}">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Tableau de bord
                </a>
                <a @click="currentPage = 'routes'; sidebarOpen = false"
                    class="flex items-center px-6 py-3 text-white hover:bg-blue-700 cursor-pointer"
                    :class="{'bg-blue-700': currentPage === 'routes'}">
                    <i class="fas fa-route mr-3"></i>
                    Gestion des trajets
                </a>
                <a @click="currentPage = 'drivers'; sidebarOpen = false"
                    class="flex items-center px-6 py-3 text-white hover:bg-blue-700 cursor-pointer"
                    :class="{'bg-blue-700': currentPage === 'drivers'}">
                    <i class="fas fa-users mr-3"></i>
                    Chauffeurs
                </a>
                <a @click="currentPage = 'passengers'; sidebarOpen = false"
                    class="flex items-center px-6 py-3 text-white hover:bg-blue-700 cursor-pointer"
                    :class="{'bg-blue-700': currentPage === 'passengers'}">
                    <i class="fas fa-user-friends mr-3"></i>
                    Passagers
                </a>
                <a @click="currentPage = 'reservations'; sidebarOpen = false"
                    class="flex items-center px-6 py-3 text-white hover:bg-blue-700 cursor-pointer"
                    :class="{'bg-blue-700': currentPage === 'reservations'}">
                    <i class="fas fa-calendar-check mr-3"></i>
                    Réservations
                </a>
                <a @click="currentPage = 'settings'; sidebarOpen = false"
                    class="flex items-center px-6 py-3 text-white hover:bg-blue-700 cursor-pointer"
                    :class="{'bg-blue-700': currentPage === 'settings'}">
                    <i class="fas fa-cog mr-3"></i>
                    Paramètres
                </a>
            </nav>
        </div>

        <!-- Content -->
        <div class="lg:ml-64 transition-all duration-300 ease-in-out"
            :class="{'ml-0': !sidebarOpen, 'ml-64': sidebarOpen}">
            <!-- Top bar -->
            <div class="bg-white h-16 flex items-center justify-between shadow-sm px-6">
                <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-gray-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex-1 px-4 lg:px-0"></div>
                <div class="flex items-center">
                    <div class="relative" x-data="{ notificationsOpen: false }">
                        <button @click="notificationsOpen = !notificationsOpen"
                            class="p-2 rounded-full text-gray-600 hover:bg-gray-100 focus:outline-none">
                            <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                            <i class="fas fa-bell"></i>
                        </button>
                        <div x-show="notificationsOpen" @click.away="notificationsOpen = false"
                            class="absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg overflow-hidden z-20"
                            style="display: none;">
                            <div class="p-3 border-b">
                                <h3 class="text-sm font-medium text-gray-700">Notifications</h3>
                            </div>
                            <div class="divide-y divide-gray-100 max-h-64 overflow-y-auto">
                                <a href="#" class="block p-4 hover:bg-gray-50">
                                    <div class="flex">
                                        <div class="ml-3 w-full">
                                            <p class="text-sm text-gray-700">Nouvelle réservation de Mohamed pour
                                                Casablanca → Rabat</p>
                                            <p class="text-xs text-gray-500 mt-1">Il y a 10 minutes</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block p-4 hover:bg-gray-50">
                                    <div class="flex">
                                        <div class="ml-3 w-full">
                                            <p class="text-sm text-gray-700">Annulation de réservation par Fatima</p>
                                            <p class="text-xs text-gray-500 mt-1">Il y a 30 minutes</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="relative ml-4" x-data="{ profileOpen: false }">
                        <div>
                            <button @click="profileOpen = !profileOpen"
                                class="flex text-sm rounded-full focus:outline-none" id="user-menu"
                                aria-expanded="false">
                                <img class="h-8 w-8 rounded-full object-cover" src="/api/placeholder/40/40"
                                    alt="Admin profile">
                            </button>
                        </div>
                        <div x-show="profileOpen" @click.away="profileOpen = false"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 z-20"
                            style="display: none;">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Votre profil</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Paramètres</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Se
                                déconnecter</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="p-6">
                <!-- Dashboard -->
                <div x-show="currentPage === 'dashboard'">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Tableau de bord</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                                    <i class="fas fa-route text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm text-gray-500">Trajets actifs</p>
                                    <p class="text-lg font-semibold text-gray-700">128</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-green-100 text-green-600">
                                    <i class="fas fa-users text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm text-gray-500">Chauffeurs actifs</p>
                                    <p class="text-lg font-semibold text-gray-700">64</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                                    <i class="fas fa-user-friends text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm text-gray-500">Passagers inscrits</p>
                                    <p class="text-lg font-semibold text-gray-700">2,417</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg shadow p-6">
                            <div class="flex items-center">
                                <div class="p-3 rounded-full bg-red-100 text-red-600">
                                    <i class="fas fa-calendar-check text-xl"></i>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm text-gray-500">Réservations aujourd'hui</p>
                                    <p class="text-lg font-semibold text-gray-700">42</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Réservations cette semaine</h3>
                            <canvas id="reservationsChart" class="w-full h-64"></canvas>
                        </div>
                        <div class="bg-white rounded-lg shadow p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Trajets les plus populaires</h3>
                            <canvas id="popularRoutesChart" class="w-full h-64"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="px-6 py-4 border-b">
                            <h3 class="text-lg font-semibold text-gray-800">Dernières réservations</h3>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ID</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Passager</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Trajet</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Statut</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#8721</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full object-cover"
                                                        src="/api/placeholder/40/40" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Ahmed Benani</div>
                                                    <div class="text-sm text-gray-500">ahmed@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Casablanca → Rabat</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">25/02/2025 14:30</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Confirmé
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <button class="text-blue-600 hover:text-blue-900 mr-3">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#8720</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full object-cover"
                                                        src="/api/placeholder/40/40" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Fatima Zahra</div>
                                                    <div class="text-sm text-gray-500">fatima@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Marrakech → Agadir</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">25/02/2025 10:15</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                En attente
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <button class="text-blue-600 hover:text-blue-900 mr-3">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#8719</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full object-cover"
                                                        src="/api/placeholder/40/40" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Karim Alaoui</div>
                                                    <div class="text-sm text-gray-500">karim@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Tanger → Tétouan</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">24/02/2025 18:45</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                Annulé
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <button class="text-blue-600 hover:text-blue-900 mr-3">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Routes Page -->
                <div x-show="currentPage === 'routes'">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold text-gray-800">Gestion des trajets</h2>
                        <button @click="showRouteForm = true; currentStep = 1"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="fas fa-plus mr-2"></i> Ajouter un trajet
                        </button>
                    </div>

                    <!-- Routes Table -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
                        <div class="px-6 py-4 border-b flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">Trajets disponibles</h3>
                            <div class="flex">
                                <div class="relative">
                                    <input type="text" placeholder="Rechercher..."
                                        class="border rounded-lg py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                                </div>
                                <select
                                    class="ml-3 border rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>Tous les statuts</option>
                                    <option>Actif</option>
                                    <option>Inactif</option>
                                </select>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ID</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Origine</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Destination</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Distance</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Durée</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Prix</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Statut</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#1001</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Casablanca</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Rabat</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">87 km</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">1h 15min</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">150 MAD</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Actif
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <button class="text-blue-600 hover:text-blue-900 mr-3">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#1002</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Marrakech</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Agadir</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">252 km</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">3h 30min</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">250 MAD</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Actif
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <button class="text-blue-600 hover:text-blue-900 mr-3">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">#1003</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Tanger</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Tétouan</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">60 km</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">50min</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">80 MAD</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                Inactif
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <button class="text-blue-600 hover:text-blue-900 mr-3">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
            

                        <section class="bg-gray-100 flex items-center justify-center min-h-screen">

                            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
                                <h2 class="text-3xl font-bold text-gray-700 mb-6 text-center">Ajouter un Détail de
                                    Trajet</h2>

                                <div class="bg-green-500 text-white p-2 mb-4 rounded text-center hidden">
                                    Succès ! Détail de trajet ajouté.
                                </div>

                                <form action="{{ route('admin.store') }}" method="POST">
                                    @csrf  
                                    <label class="block text-gray-700 font-semibold mb-2">Trajet :</label>
                                    <input type="text" name="nom"
                                        class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        required>

                                    <!-- Zone dynamique pour ajouter plusieurs orders -->
                                    <div id="orders-container">
                                        <div class="order-group mb-4 flex gap-2">
                                            <input type="text" name="point_de_pause[]"
                                                class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                                required>
                                            <input type="number" name="order[]" placeholder="ID Order"
                                                class="w-1/2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                                required>
                                            <button type="button"
                                                class="remove-order hidden text-red-500 text-lg font-bold px-2"
                                                onclick="removeOrder(this)">×</button>
                                        </div>
                                    </div>

                                    <!-- Bouton pour ajouter un autre Order -->
                                    <button type="button" onclick="addOrder()"
                                        class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2 rounded-lg shadow-md transition duration-300 mb-4">
                                        + Ajouter un autre Order
                                    </button>

                                    <button type="submit"
                                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-lg shadow-md transition duration-300">
                                        Ajouter
                                    </button>
                                </form>
                            </div>

                            <script>
                                function addOrder() {
                                    const container = document.getElementById('orders-container');
                                    const div = document.createElement('div');
                                    div.classList.add('order-group', 'mb-4', 'flex', 'gap-2');

                                    div.innerHTML = `
                                            <input type="text" name="point_de_pause[]" class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                        <input type="number" name="order[]" placeholder="ID Order" class="w-1/2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                        <button type="button" class="remove-order text-red-500 text-lg font-bold px-2" onclick="removeOrder(this)">×</button>
                                    `;

                                    container.appendChild(div);
                                    updateRemoveButtons();
                                }

                                function removeOrder(button) {
                                    button.parentElement.remove();
                                    updateRemoveButtons();
                                }

                                function updateRemoveButtons() {
                                    const removeButtons = document.querySelectorAll('.remove-order');
                                    removeButtons.forEach(button => {
                                        button.classList.toggle('hidden', removeButtons.length === 1);
                                    });
                                }

                                updateRemoveButtons();
                            </script>

                        </section>

                        </html>