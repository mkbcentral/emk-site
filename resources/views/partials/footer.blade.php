@php
    $webSiteInfo = \App\Models\WebSiteInfo::first();
@endphp
<!-- Footer -->
<footer class="bg-gradient-to-bl from-blue-900 via-gray-900 to-black text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div>
                    <img src="{{ asset('storage/' . $webSiteInfo->logo) }}" alt="EMK Logo" class="h-10 w-auto">
                    <div>
                        <h3 class="text-xl font-bold">{{ $webSiteInfo->name }}</h3>
                        <p class="text-sm text-gray-400">
                            {{ $webSiteInfo->description }}
                        </p>
                    </div>
                </div>
                <p class="text-gray-400">Votre partenaire juridique de confiance dans le secteur minier.</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Liens rapides</h4>
                <ul class="space-y-2">
                    <li><a href="index.html"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Accueil</a></li>
                    <li><a href="services.html"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Services</a></li>
                    <li><a href="contact.html"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><a href="conseil-juridique.html"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Conseil juridique</a>
                    </li>
                    <li><a href="conformite.html"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Conformité
                            réglementaire</a></li>
                    <li><a href="negociation.html"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Négociation de
                            contrats</a></li>
                    <li><a href="litiges.html"
                            class="text-gray-400 hover:text-white transition-colors duration-300">Litiges miniers</a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Contact</h4>
                <div class="space-y-2">
                    <p class="flex items-center text-gray-400">
                        {{ $webSiteInfo->address }}
                    </p>
                    <p class="flex items-center text-gray-400">
                        <i class="fas fa-phone w-5 mr-2 text-blue-500"></i>
                        {{ $webSiteInfo->phone }}
                    </p>
                    <p class="flex items-center text-gray-400">
                        <i class="fas fa-envelope w-5 mr-2 text-blue-500"></i>
                        {{ $webSiteInfo->email }}
                    </p>
                    <p class="flex items-center text-gray-400">
                        <i class="fas fa-envelope w-5 mr-2 text-blue-500"></i>
                        {{ $webSiteInfo->other_email }}
                    </p>
                    <a href="index.html#contact"
                        class=" mt-4 bg-blue-700 text-white px-4 py-2
                        rounded-lg font-medium hover:bg-blue-800
                         transition-colors duration-300 flex
                          items-center space-x-2">
                        Contactez-nous <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm">&copy; 2025 {{ config('app.name') }}. Tous droits réservés.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
        <div class="mt-4 text-center text-xs text-gray-500">
            By <a href="https://mkbcentral.com/" target="_blank" class="underline hover:text-white">Ben MWILA</a>
        </div>
    </div>
</footer>
