<!-- Hero Section -->
<section class="pt-0 relative min-h-screen ">
    <div class="absolute inset-0 h-full w-full overflow-hidden hero-section" id="carousel">
        <div class="carousel-inner absolute w-full h-full flex transition-transform duration-700 ease-in-out">
            <!-- Slide 1 -->
            <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center justify-center"
                style="background-size: 150%; background-image: linear-gradient(rgba(17, 24, 39, 0.6), rgba(55, 65, 81, 0.6)), url('expertise.jpg')">
                <div class="text-center text-white px-4" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="text-3xl md:text-4xl font-semibold mb-4">
                        {{ __('Bienvenue chez') }}
                    </h2>
                    <p class="text-6xl md:text-7xl font-extrabold">
                        {{ config('app.name') }}
                    </p>
                    <p class="text-xl mt-2">
                        {{ __('Votre excellent partenaire dans le domaine des mines et des carrières') }}
                    </p>
                    <a href="#about"
                        class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-full shadow-lg transition-all duration-300"
                        data-aos="zoom-in" data-aos-duration="1000">
                        {{ __('Voir Plus') }}
                    </a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center"
                style="background-size: 150%; background-image: linear-gradient(rgba(17, 24, 39, 0.6), rgba(55, 65, 81, 0.6)), url('expertises.jpg')">
                <div class="flex justify-start items-center w-full h-full px-6">
                    <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-lg shadow-lg p-6 text-center text-white max-w-2xl mt-16"
                        data-aos="fade-right" data-aos-duration="1000">
                        <h2 class="text-2xl md:text-3xl font-bold mb-3 leading-snug">La RDC, un pays d’opportunités
                            minières</h2>
                        <p class="text-lg md:text-xl mb-4 leading-relaxed">
                            Scandale géologique ! La République Démocratique du Congo (RDC) en sigle, est l’un des plus
                            grands pays de l'Afrique centrale dont les souterrains renferment une batterie des métaux
                            divers avec un potentiel géologique des ressources naturelles et minérales sans pareilles au
                            monde, d’où la nécessité de l’érection du cabinet de mandataire en Mines et carrières EMK
                            MINES OFFICE.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center"
                style="background-size: 150%; background-image: linear-gradient(rgba(17, 24, 39, 0.6), rgba(55, 65, 81, 0.6)), url('expertisess.jpg')">
                <div class="flex justify-end items-center w-full h-full px-6">
                    <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-lg shadow-lg p-6 text-center text-white max-w-2xl mt-16"
                        data-aos="fade-left" data-aos-duration="1000">
                        <h2 class="text-2xl md:text-3xl font-bold mb-3 leading-snug">La RDC, un pays d’opportunités
                            minières</h2>
                        <p class="text-lg md:text-xl mb-4 leading-relaxed">
                            La RDC possède des gisements riches et variées de plus d'une cinquantaine de minerais, mais
                            seulement une douzaine est généralement exploitée, à savoir : le cuivre, le cobalt,
                            l'argent, le plomb, le zinc, le cadmium, le diamant, l’or, l’étain, le tantale, la
                            cassitérite, le tungstène, le manganèse et quelques métaux rares comme le coltan, le
                            lithium, le germanium et tant d’autres, .
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contrôles du carousel -->
        <div class="absolute bottom-6 left-6 flex space-x-4 z-10">
            <button
                class="bg-white/30 hover:bg-white/50 w-12 h-12 rounded-full flex items-center justify-center text-white transition-all duration-300 animate-pulse hover:scale-110 hover:animate-none shadow-lg"
                id="prev-slide" data-aos="fade-up" data-aos-duration="1000">
                <i class="fas fa-chevron-left text-xl"></i>
            </button>
            <button
                class="bg-white/30 hover:bg-white/50 w-12 h-12 rounded-full flex items-center justify-center text-white transition-all duration-300 animate-pulse hover:scale-110 hover:animate-none shadow-lg"
                id="next-slide" data-aos="fade-up" data-aos-duration="1000">
                <i class="fas fa-chevron-right text-xl"></i>
            </button>
        </div>
    </div>
</section>
