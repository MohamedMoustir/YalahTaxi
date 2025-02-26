<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YalahTaxi - Transport interurbain au Maroc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body class="bg-gray-50 font-sans">
    <!-- Navigation -->
    <nav class="bg-gray-800 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <span class="text-amber-400 font-bold text-2xl">YalahTaxi</span>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#how-it-works" class="text-white hover:text-amber-400 transition">Fonctionnement</a>
                    <a href="#drivers" class="text-white hover:text-amber-400 transition">Conducteurs</a>
                    <a href="#reviews" class="text-white hover:text-amber-400 transition">Avis</a>
                    <a href="#faq" class="text-white hover:text-amber-400 transition">FAQ</a>
                    <button class="bg-amber-400 text-gray-900 px-6 py-2 rounded-full hover:bg-amber-500 transition font-medium">
                        Réserver maintenant
                    </button>
                </div>
                <div class="md:hidden">
                    <button class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-[500px] flex items-center">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-black/30"></div>
        <div class="bg-[url('free-photo-of-yellow-taxi-navigating-tokyo-traffic-in-a-busy-cityscape.jpeg')] absolute inset-0 bg-cover bg-center -z-10"></div>
        
        <div class="container mx-auto px-4 text-center text-white relative">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Voyagez en Grand Taxi en toute confiance</h1>
            <p class="text-xl mb-8">Réservez votre trajet interurbain au Maroc en quelques clics</p>
            
            <!-- Booking Form -->
            <div class="max-w-4xl mx-auto bg-white rounded-lg p-6 shadow-lg">
                <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-gray-700 text-left mb-2 font-medium">Départ</label>
                        <select class="w-full p-3 border rounded-lg bg-white">
                            <option>Casablanca</option>
                            <option>Rabat</option>
                            <option>Marrakech</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 text-left mb-2 font-medium">Destination</label>
                        <select class="w-full p-3 border rounded-lg bg-white">
                            <option>Rabat</option>
                            <option>Casablanca</option>
                            <option>Marrakech</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 text-left mb-2 font-medium">Date</label>
                        <input type="datetime-local" class="w-full p-3 border rounded-lg">
                    </div>
                    <div>
                        <label class="block text-gray-700 text-left mb-2 font-medium">Passagers</label>
                        <select class="w-full p-3 border rounded-lg bg-white">
                            <option>1 passager</option>
                            <option>2 passagers</option>
                            <option>3 passagers</option>
                        </select>
                    </div>
                    <button class="md:col-span-4 bg-amber-400 text-gray-900 p-3 rounded-lg font-bold hover:bg-amber-500 transition">
                        Trouver un taxi
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Pourquoi choisir YalahTaxi ?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Notre service facilite vos déplacements interurbains avec confort, sécurité et à des prix compétitifs.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 hover:-translate-y-2 transition-all duration-300">
                    <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-money-bill-wave text-amber-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Prix transparent</h3>
                    <p class="text-gray-600">Tarifs fixés à l'avance sans surprise. Partagez le coût avec d'autres passagers.</p>
                </div>
                <div class="text-center p-6 hover:-translate-y-2 transition-all duration-300">
                    <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-amber-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Sécurité garantie</h3>
                    <p class="text-gray-600">Conducteurs vérifiés et véhicules contrôlés régulièrement pour votre sécurité.</p>
                </div>
                <div class="text-center p-6 hover:-translate-y-2 transition-all duration-300">
                    <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-amber-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Réservation flexible</h3>
                    <p class="text-gray-600">Réservez à l'avance ou trouvez un taxi disponible immédiatement selon vos besoins.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works Section -->
    <section class="relative py-16 bg-gradient-to-br from-amber-50 to-amber-100">
        <div class="absolute top-0 left-0 right-0 h-24 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDBweCIgdmlld0JveD0iMCAwIDEyODAgMTQwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxnIGZpbGw9IiNmZmYiPjxwYXRoIGQ9TTEyODAgMTQwVjBIMHYxNDBjNDAgMjYuNyAxMjguOCA4MCAyODAgODBzMjQwLTUzLjMgMjgwLTgwIDkzLjktNTMuMyAyNDAtNTMuMyAxODAgMjYuNyAyODAgODB6IiBmaWxsLW9wYWNpdHk9Ii4zIi8+PC9nPjwvc3ZnPg==')]"></div>
      
        <div class="container mx-auto px-4">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Comment ça marche</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Découvrez l'expérience de voyage la plus sûre et confortable</p>
          </div>
      
          <div class="grid md:grid-cols-3 gap-8">
            <!-- Carte 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition-all duration-300">
              <div class="w-16 h-16 bg-amber-400 rounded-xl flex items-center justify-center mb-6">
                🚖
              </div>
              <h3 class="text-2xl font-bold text-gray-800 mb-4">Réservation instantanée</h3>
              <p class="text-gray-600 mb-4">Trouvez un chauffeur disponible en temps réel avec notre système intelligent de matching</p>
              <a href="#" class="text-amber-400 flex items-center hover:text-amber-500">
                En savoir plus
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
      
            <!-- Carte 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition-all duration-300">
              <div class="w-16 h-16 bg-amber-400 rounded-xl flex items-center justify-center mb-6">
                💳
              </div>
              <h3 class="text-2xl font-bold text-gray-800 mb-4">Paiement sécurisé</h3>
              <p class="text-gray-600 mb-4">Paiement en ligne crypté avec confirmation immédiate de votre réservation</p>
              <div class="flex space-x-4">
                <img src="visa.svg" class="h-8" alt="Visa">
                <img src="cm.svg" class="h-8" alt="CM">
              </div>
            </div>
      
            <!-- Carte 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:-translate-y-2 transition-all duration-300">
              <div class="w-16 h-16 bg-amber-400 rounded-xl flex items-center justify-center mb-6">
                🌟
              </div>
              <h3 class="text-2xl font-bold text-gray-800 mb-4">Service Premium</h3>
              <p class="text-gray-600 mb-4">Chauffeurs professionnels avec véhicules haut de gamme et contrôles réguliers</p>
              <div class="flex items-center text-sm text-amber-400">
                ★★★★★ <span class="ml-2 text-gray-600">(4.9/5 sur 1500 avis)</span>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Estimez votre tarif</h2>
            <div class="max-w-2xl mx-auto bg-gray-50 p-8 rounded-xl">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 mb-2">Ville de départ</label>
                        <select class="w-full p-3 border rounded-lg">
                            <option>Casablanca</option>
                            <option>Marrakech</option>
                            <option>Rabat</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Ville d'arrivée</label>
                        <select class="w-full p-3 border rounded-lg">
                            <option>Fès</option>
                            <option>Tanger</option>
                            <option>Agadir</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <div class="text-4xl font-bold text-amber-400">250 MAD</div>
                    <p class="text-gray-600 mt-2">Tarif moyen pour ce trajet</p>
                </div>
            </div>
        </div>
    </section>  
    <!-- Popular Routes -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl text-center font-bold mb-12">Trajets populaires</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="border rounded-lg overflow-hidden shadow-md">
                    <img src="/api/placeholder/400/200" alt="Casablanca à Rabat" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold">Mohamed K.</h3>
                                <div class="text-amber-400">★★★★☆</div>
                            </div>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">En ligne</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-gray-600">
                                <p>Mercedes Vito</p>
                                <p>6 places</p>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-bold text-amber-400">250 MAD</p>
                                <button class="mt-2 bg-amber-400 text-gray-900 px-4 py-2 rounded-full hover:bg-amber-500 transition">
                                    Réserver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border rounded-lg overflow-hidden shadow-md">
                    <img src="/api/placeholder/400/200" alt="Casablanca à Rabat" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold">Mohamed K.</h3>
                                <div class="text-amber-400">★★★★☆</div>
                            </div>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">En ligne</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-gray-600">
                                <p>Mercedes Vito</p>
                                <p>6 places</p>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-bold text-amber-400">250 MAD</p>
                                <button class="mt-2 bg-amber-400 text-gray-900 px-4 py-2 rounded-full hover:bg-amber-500 transition">
                                    Réserver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border rounded-lg overflow-hidden shadow-md">
                    <img src="/api/placeholder/400/200" alt="Casablanca à Rabat" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-xl font-bold">Mohamed K.</h3>
                                <div class="text-amber-400">★★★★☆</div>
                            </div>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">En ligne</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-gray-600">
                                <p>Mercedes Vito</p>
                                <p>6 places</p>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-bold text-amber-400">250 MAD</p>
                                <button class="mt-2 bg-amber-400 text-gray-900 px-4 py-2 rounded-full hover:bg-amber-500 transition">
                                    Réserver
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Répète pour plus d'éléments -->
            </div>
    
            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav aria-label="Page navigation">
                    <ul class="flex items-center space-x-4">
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-700">&laquo; Précédent</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-700">3</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-500 hover:text-gray-700">Suivant &raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    

    <!-- Drivers Section -->
    <section id="drivers" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl text-center font-bold mb-12">Nos chauffeurs professionnels</h2>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="0P9A1587.JPG" alt="Chauffeur Hassan" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="font-bold text-xl mb-1">Hassan</h3>
                    <div class="text-amber-400 mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-600 ml-1">4.5/5</span>
                    </div>
                    <p class="text-gray-600 mb-3">5 ans d'expérience</p>
                    <p class="text-gray-600 text-sm">Casablanca → Rabat</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="0P9A1587.JPG" alt="Chauffeur Mohammed" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="font-bold text-xl mb-1">Mohammed</h3>
                    <div class="text-amber-400 mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-gray-600 ml-1">5.0/5</span>
                    </div>
                    <p class="text-gray-600 mb-3">8 ans d'expérience</p>
                    <p class="text-gray-600 text-sm">Marrakech → Essaouira</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="0P9A1587.JPG" alt="Chauffeur Fatima" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="font-bold text-xl mb-1">Fatima</h3>
                    <div class="text-amber-400 mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-600 ml-1">4.0/5</span>
                    </div>
                    <p class="text-gray-600 mb-3">3 ans d'expérience</p>
                    <p class="text-gray-600 text-sm">Tanger → Tétouan</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                    <img src="0P9A1587.JPG" alt="Chauffeur Karim" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="font-bold text-xl mb-1">Karim</h3>
                    <div class="text-amber-400 mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-600 ml-1">4.7/5</span>
                    </div>
                    <p class="text-gray-600 mb-3">6 ans d'expérience</p>
                    <p class="text-gray-600 text-sm">Fès → Meknès</p>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="#" class="text-amber-500 hover:text-amber-600 font-bold">Voir tous nos chauffeurs →</a>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl text-center font-bold mb-12">Ce que disent nos clients</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg shadow-md testimonial-card">
                    <div class="text-amber-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"Service impeccable ! J'ai réservé facilement et le chauffeur était ponctuel et professionnel. Je recommande vivement YalahTaxi pour les voyages entre villes."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/50/50" alt="Avis client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Samira B.</h4>
                            <p class="text-gray-500 text-sm">Casablanca → Rabat</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md testimonial-card">
                    <div class="text-amber-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"Très pratique pour éviter les tracas de la gare routière. Prix raisonnable et chauffeur courtois. Application facile à utiliser. Je l'utiliserai pour tous mes déplacements."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/50/50" alt="Avis client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Ahmed M.</h4>
                            <p class="text-gray-500 text-sm">Marrakech → Essaouira</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow-md testimonial-card">
                    <div class="text-amber-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"Excellente alternative aux transports en commun. J'apprécie particulièrement la possibilité de réserver à l'avance pour être sûr d'avoir une place. Véhicule propre et confortable."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/50/50" alt="Avis client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold">Rachid K.</h4>
                            <p class="text-gray-500 text-sm">Fès → Meknès</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="font-sans bg-gray-50">
        <div class="container mx-auto py-16 px-4 relative">
            <h2 class="text-3xl text-center font-bold mb-16">Comment ça marche</h2>
            <!-- Right column with taxi image -->
            <div class="flex items-center justify-center">
                <img src="https://www.taxidaba.com/images/fr/tofCom%C3%A7.jpg" alt="Taxi Daba Maroc"
                    class="w-[9000px] h-auto">
            </div>
            <div class="text-center mt-16">
                <a href="#"
                    class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-3 px-8 rounded-full text-xl transition duration-300 shadow-md">
                    Réserver maintenant
                </a>
            </div>
        </div>
    </section>
    <!-- Download App -->
    <section class="py-16 bg-gray-800 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Téléchargez notre application</h2>
                    <p class="text-gray-300 mb-6">Réservez, payez et suivez votre taxi en temps réel depuis notre application mobile.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-900 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="fab fa-apple text-2xl mr-2"></i>
                            <div>
                                <div class="text-xs">Télécharger sur</div>
                                <div class="font-bold">App Store</div>
                            </div>
                        </a>
                        <a href="#" class="bg-gray-900 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="fab fa-google-play text-2xl mr-2"></i>
                            <div>
                                <div class="text-xs">Télécharger sur</div>
                                <div class="font-bold">Google Play</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="/api/placeholder/300/600" alt="Application mobile YalahTaxi" class="h-80 w-auto">
                </div>
            </div>
        </div>
    </section>

 

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-amber-400 font-bold text-xl mb-4">YalahTaxi</h4>
                    <p class="text-gray-400">Votre solution de transport interurbain au Maroc</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div>
                    <h5 class="font-bold mb-4">Entreprise</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-amber-400 transition">À propos</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Carrières</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Presse</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold mb-4">Légal</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-amber-400 transition">Conditions d'utilisation</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Politique de confidentialité</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Cookies</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold mb-4">Contact</h5>
                    <p class="text-gray-400 mb-2"><i class="fas fa-envelope mr-2"></i> contact@YalahTaxi.ma</p>
                    <p class="text-gray-400 mb-2"><i class="fas fa-phone mr-2"></i> +212 600 000 000</p>
                    <p class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i> 123 Avenue Hassan II, Casablanca</p>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-500">
                <p>© 2025 YalahTaxi. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>