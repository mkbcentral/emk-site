<x-layouts.app.main>
    <!-- Main Content with Hero Banner -->
    <section class="pt-36 bg-gradient-to-br from-blue-900 to-blue-700 text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Notre Histoire</h1>
                <p class="text-xl text-blue-100 mb-8">Découvrez l'évolution d'EMK Mines Office,Cabinet du mandataire en
                    mines et carrières </p>
            </div>
        </div>
        <div class="wave-divider h-20 bg-bottom bg-no-repeat bg-cover"
            style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 1440 320\'%3E%3Cpath fill=\'%23F9FAFB\' fill-opacity=\'1\' d=\'M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\'%3E%3C/path%3E%3C/svg%3E');">
        </div>
    </section>

    <!-- History Content Section with Sidebar -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-10">
                    <!-- Sidebar Navigation -->
                    <div class="lg:w-1/4">
                        <div class="bg-white rounded-xl shadow-md p-6 sticky top-36">
                            <h3 class="text-xl font-semibold text-blue-900 mb-6 pb-3 border-b border-gray-200">Explorer
                                notre histoire</h3>
                            <ul class="space-y-2">
                                <li>
                                    <button data-section="fondation"
                                        class="history-nav-btn w-full text-left px-4 py-2 rounded-lg bg-blue-100 text-blue-800 hover:bg-blue-200 transition-colors duration-300 font-medium flex items-center">
                                        <i class="fas fa-building mr-2"></i> Fondation
                                    </button>
                                </li>
                                <li>
                                    <button data-section="expansion"
                                        class="history-nav-btn w-full text-left px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 font-medium flex items-center">
                                        <i class="fas fa-rocket mr-2"></i> Mission
                                    </button>
                                </li>

                            </ul>

                            <div class="mt-8 bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-medium text-blue-800 mb-2">Besoin de plus d'informations?</h4>
                                <p class="text-gray-600 text-sm mb-3">Contactez-nous pour en savoir plus sur notre
                                    cabinet et son évolution</p>
                                <a href="{{ route('contact') }}"
                                    class="inline-block text-sm bg-blue-700 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-800 transition-colors duration-300">
                                    Nous contacter
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="lg:w-3/4">
                        <!-- Fondation Section -->
                        <div id="fondation" class="history-section">
                            <h2 class="text-3xl font-bold text-blue-900 mb-6">La fondation d'EMK Mines Office, Cabinet
                                du mandataire en mines et carrières </h2>

                            <div class="mb-8">
                                <img src="{{ asset('hero.jpg') }}" alt="Premiers bureaux EMK"
                                    class="w-full h-80 object-cover object-center rounded-xl shadow-md mb-4">
                                <p class="text-gray-500 text-sm italic">
                                    Les premiers bureaux
                                    d'EMK Mines Office, Cabinet du mandataire en mines et carrières</p>
                            </div>

                            <div class="prose max-w-none text-gray-700 space-y-4">
                                <p>
                                    En cours de redaction
                                </p>
                            </div>
                        </div>

                        <!-- Expansion Section -->
                        <div id="expansion" class="history-section hidden">
                            <h2 class="text-3xl font-bold text-blue-900 mb-6">Notre mission</h2>

                            <div class="mb-8">
                                <img src="{{ asset('avocat2.jpg') }}" alt="L'équipe EMK en pleine expansion"
                                    class="w-full h-80 object-cover object-center rounded-xl shadow-md mb-4">
                                <p class="text-gray-500 text-sm italic">Notre mission : accompagner nos clients dans la
                                    réussite de leurs projets miniers, en garantissant expertise, intégrité et
                                    engagement au service du développement durable.</p>
                            </div>

                            <div class="prose max-w-none text-gray-700 space-y-4">
                                <p>
                                    Au regard de l’amplitude exponentielle des abus et dérapage que présente désormais
                                    le secteur des mines, EMK MINES OFFICE dans sa triple mission légale qui lui est
                                    reconnue sur pied de l’article 25 de la Loi n° 007/2002 du 11 juillet 2002 portant
                                    Code minier telle que modifiée et complétée par la Loi n° 18/001 du 09 mars 2018,
                                    rassure de sa disponibilité à pouvoir assurer avec abnégation et diligence une
                                    passerelle stratégique entre les opérateurs miniers et l’administration minière,
                                    fiscale et parafiscale.
                                    EMK MINES OFFICES offre à ses clients, personnes morales de droit congolais et
                                    celles de droit étranger, la possibilité d’élire domicile pour tous leurs actes
                                    relatifs aux droits miniers et de carrières à son cabinet.
                                    En vue de procurer satisfaction à ses clients au travers de la défense de leurs
                                    intérêts à tous les niveaux, EMK MINES OFFICES s’engage à entretenir des relations
                                    de proximité, de collaboration et de partenariat avec les institutions étatiques,
                                    services et bureaux tant provinciaux, nationaux qu’internationaux qui interviennent
                                    dans la législation minière en vigueur en République Démocratique du Congo.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // History navigation functionality
            const historyNavButtons = document.querySelectorAll('.history-nav-btn');
            const historySections = document.querySelectorAll('.history-section');

            // Show the first section by default
            historySections[0].classList.remove('hidden');

            historyNavButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Get the section to show
                    const sectionId = this.getAttribute('data-section');
                    const sectionToShow = document.getElementById(sectionId);

                    // Hide all sections
                    historySections.forEach(section => {
                        section.classList.add('hidden');
                    });

                    // Remove active class from all buttons
                    historyNavButtons.forEach(btn => {
                        btn.classList.remove('bg-blue-100', 'text-blue-800');
                        btn.classList.add('text-gray-700');
                    });

                    // Show the selected section
                    sectionToShow.classList.remove('hidden');

                    // Add active class to clicked button
                    this.classList.remove('text-gray-700');
                    this.classList.add('bg-blue-100', 'text-blue-800');

                    // Scroll to top of content area for mobile users
                    if (window.innerWidth < 1024) {
                        sectionToShow.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Animation on scroll
            const observerOptions = {
                threshold: 0.2,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const animation = el.getAttribute('data-animation');

                        el.classList.add('animated');

                        if (animation === 'fade-right') {
                            el.style.animation = 'fadeInRight 1s forwards';
                        } else if (animation === 'fade-left') {
                            el.style.animation = 'fadeInLeft 1s forwards';
                        } else {
                            el.style.animation = 'fadeInUp 1s forwards';
                        }

                        observer.unobserve(el);
                    }
                });
            }, observerOptions);

            const animateItems = document.querySelectorAll('.animate-on-scroll');
            animateItems.forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</x-layouts.app.main>
