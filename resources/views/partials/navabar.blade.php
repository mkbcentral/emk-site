<!-- Header avec animation -->
<header class="bg-blue-900 text-white shadow-lg fixed w-full z-50 transition-all duration-300" id="header">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-8">
            <div class="flex items-center space-x-6">
                <img src="{{ asset('logo.jpg') }}" alt="EMK Logo" class="h-20 w-auto animate-pulse">
                <div class="md:block hidden">
                    <h1 class="text-4xl font-bold text-white">EMK</h1>
                    <p class="text-lg text-blue-200">Cabinet Juridique de Suivi Minier</p>
                </div>
            </div>

            <div class="hidden md:flex flex-col items-end">
                <div class="flex items-center space-x-10 mb-8">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-phone text-blue-300 text-xl"></i>
                        <span class="text-blue-100 text-lg">+243 995 226 900</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-blue-300 text-xl"></i>
                        <span class="text-blue-100 text-lg">emkminesoffice.rdc@gmail.com</span>
                    </div>
                    <div class="flex items-center space-x-6">
                        <a href="#"
                            class="text-blue-300 hover:text-white transition-colors duration-300 text-2xl">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="text-blue-300 hover:text-white transition-colors duration-300 text-2xl">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#"
                            class="text-blue-300 hover:text-white transition-colors duration-300 text-2xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    <div class="flex items-center space-x-2 ml-6 border-l border-blue-700 pl-6">
                        <a href="#" class="text-blue-100 hover:text-white transition-colors duration-300">FR</a>
                        <span class="text-blue-700">|</span>
                        <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">EN</a>
                    </div>
                </div>
                <nav>
                    <ul class="flex space-x-6">
                        <li>
                            <a href="/"
                                class="text-blue-100 hover:text-white transition-colors duration-300 font-medium text-md nav-link active">
                                Accueil
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="#"
                                class="text-blue-100 hover:text-white transition-colors duration-300 font-medium text-md flex items-center nav-link">
                                Présentation
                                <i
                                    class="fas fa-chevron-down ml-2 text-sm group-hover:rotate-180 transition-transform duration-300"></i>
                            </a>
                            <ul
                                class="absolute left-0 mt-2 w-48 bg-gradient-to-b from-gray-200 to-white rounded-lg shadow-lg py-2 hidden group-hover:block transition-all duration-300 z-50">
                                <li>
                                    <a href="{{ route('historique') }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 border-b border-gray-200">
                                        Historique
                                    </a>
                                </li>
                                <li>
                                    <a href="directeur.html"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 border-b border-gray-200">
                                        Directeur Général
                                    </a>
                                </li>
                                <li>
                                    <a href="directeur.html"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 border-b border-gray-200">
                                        Réalisation
                                    </a>
                                </li>

                                <li>
                                    <a href="sponsors.html"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300">
                                        Nos Sponsors
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="relative group">
                            <a href="#"
                                class="text-blue-100 hover:text-white transition-colors duration-300 font-medium text-md flex items-center nav-link">
                                Expertise
                                <i
                                    class="fas fa-chevron-down ml-2 text-sm group-hover:rotate-180 transition-transform duration-300"></i>
                            </a>
                            <ul
                                class="absolute left-0 mt-2 w-48 bg-gradient-to-b from-gray-200 to-white rounded-lg shadow-lg py-2 hidden group-hover:block transition-all duration-300 z-50">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 border-b border-gray-200">
                                        Legislation
                                    </a>
                                </li>
                                <li class="relative group/submenu">
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 border-b border-gray-200 flex items-center justify-between">
                                        Traitement des dossiers
                                        <i class="fas fa-chevron-right ml-2 text-sm"></i>
                                    </a>
                                    <ul
                                        class="absolute left-full top-0 w-48 bg-gradient-to-b from-gray-200 to-white rounded-lg shadow-lg py-2 hidden group-hover/submenu:block transition-all duration-300 z-50">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 border-b border-gray-200">
                                                Consultation
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 border-b border-gray-200">
                                                Ouverture de dossiers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300">
                                                Etude de dossiers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300">
                                                Procedures et redaction des actes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300">
                                                Formulaire
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 border-b border-gray-200">
                                        Pratique juridique
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300">
                                        Pratique fiscale
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300">
                                        Actes de procédures
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('galerie') }}"
                                class="text-blue-100 hover:text-white transition-colors duration-300 font-medium text-md nav-link">Galerie</a>
                        </li>
                        <li><a href="{{ route('contact') }}"
                                class="text-blue-100 hover:text-white transition-colors duration-300 font-medium text-md nav-link">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <button class="md:hidden text-white" id="mobile-menu-button">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-blue-800 border-t border-blue-700">
        <div class="container mx-auto px-4 py-2 border-b border-blue-700">
            <div class="space-y-2 text-sm">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-phone text-blue-300"></i>
                    <span class="text-blue-100">+243 12 345 6789</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-envelope text-blue-300"></i>
                    <span class="text-blue-100"><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="f2919d9c86939186b2979f999193909b9c9786dc919d9f">[email&#160;protected]</a></span>
                </div>
                <div class="flex items-center space-x-4 mt-2">
                    <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <div class="border-l border-blue-700 pl-4 ml-2 flex items-center space-x-2">
                        <a href="#" class="text-blue-100 hover:text-white transition-colors duration-300">FR</a>
                        <span class="text-blue-700">|</span>
                        <a href="#" class="text-blue-300 hover:text-white transition-colors duration-300">EN</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="container mx-auto px-4 py-3">
            <ul class="space-y-3">
                <li><a href="index.html"
                        class="block py-2 text-blue-100 hover:text-white transition-colors duration-300">Accueil</a>
                </li>
                <li class="py-2">
                    <div class="flex items-center justify-between text-blue-100 hover:text-white"
                        id="mobile-services-toggle">
                        <span>Services</span>
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </div>
                    <ul class="pl-4 mt-2 space-y-2 hidden" id="mobile-services-menu">
                        <li><a href="conseil-juridique.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Conseil
                                juridique</a></li>
                        <li class="py-2 border-b border-blue-700">
                            <div class="flex items-center justify-between text-blue-100 hover:text-white"
                                id="mobile-conformite-toggle">
                                <span>Conformité réglementaire</span>
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </div>
                            <ul class="pl-4 mt-2 space-y-2 hidden" id="mobile-conformite-menu">
                                <li><a href="standards.html"
                                        class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Standards
                                        internationaux</a></li>
                                <li><a href="legislation.html"
                                        class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Législation
                                        locale</a></li>
                                <li><a href="audits.html"
                                        class="block py-2 text-blue-100 hover:text-white transition-colors duration-300">Audits
                                        de conformité</a></li>
                            </ul>
                        </li>
                        <li><a href="negociation.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Négociation
                                de contrats</a></li>
                        <li><a href="litiges.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300">Litiges
                                miniers</a></li>
                    </ul>
                </li>
                <li class="py-2">
                    <div class="flex items-center justify-between text-blue-100 hover:text-white"
                        id="mobile-expertise-toggle">
                        <span>Expertise</span>
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </div>
                    <ul class="pl-4 mt-2 space-y-2 hidden" id="mobile-expertise-menu">
                        <li><a href="droit-minier.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Droit
                                minier</a></li>
                        <li class="py-2 border-b border-blue-700">
                            <div class="flex items-center justify-between text-blue-100 hover:text-white"
                                id="mobile-contrats-toggle">
                                <span>Contrats miniers</span>
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </div>
                            <ul class="pl-4 mt-2 space-y-2 hidden" id="mobile-contrats-menu">
                                <li><a href="contrats-exploration.html"
                                        class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Contrats
                                        d'exploration</a></li>
                                <li><a href="contrats-exploitation.html"
                                        class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Contrats
                                        d'exploitation</a></li>
                                <li><a href="partenariats.html"
                                        class="block py-2 text-blue-100 hover:text-white transition-colors duration-300">Partenariats
                                        miniers</a></li>
                            </ul>
                        </li>
                        <li><a href="litiges-miniers.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Litiges
                                miniers</a></li>
                        <li><a href="conformite-esg.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300">Conformité
                                ESG</a></li>
                    </ul>
                </li>
                <li class="py-2">
                    <div class="flex items-center justify-between text-blue-100 hover:text-white"
                        id="mobile-presentation-toggle">
                        <span>Présentation</span>
                        <i class="fas fa-chevron-down transition-transform duration-300"></i>
                    </div>
                    <ul class="pl-4 mt-2 space-y-2 hidden" id="mobile-presentation-menu">
                        <li><a href="directeur.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Directeur
                                Général</a></li>
                        <li><a href="historique.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Historique</a>
                        </li>
                        <li><a href="galerie.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300 border-b border-blue-700 pb-2">Galerie</a>
                        </li>
                        <li><a href="sponsors.html"
                                class="block py-2 text-blue-100 hover:text-white transition-colors duration-300">Nos
                                Sponsors</a></li>
                    </ul>
                </li>
                <li><a href="contact.html"
                        class="block py-2 text-blue-100 hover:text-white transition-colors duration-300">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
