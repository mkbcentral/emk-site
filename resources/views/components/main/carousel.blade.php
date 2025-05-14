<!-- Hero Section -->
<section class="pt-0 relative min-h-screen">
    <div class="absolute inset-0 h-full w-full overflow-hidden hero-section" id="carousel">
        <div class="carousel-inner absolute w-full h-full flex transition-transform duration-700 ease-in-out">
            <!-- Slide 1 -->
            <div class="carousel-slide min-w-full h-full bg-center flex items-center justify-center transition-transform duration-700 ease-in-out"
                style="background-size: cover; background-image: linear-gradient(rgba(17, 24, 39, 0.6), rgba(55, 65, 81, 0.6)), url('slide3.jpg')">
                <div class="text-center text-white px-4 md:px-8" data-aos="fade-down" data-aos-delay="300">
                    <h2 class="text-2xl md:text-4xl font-semibold mb-4">
                        {{ __('Bienvenue chez') }}
                    </h2>
                    <p class="text-4xl md:text-7xl font-extrabold mb-2" data-aos="fade-down" data-aos-delay="300">
                        {{ config('app.name') }}
                    </p>
                    <p class="text-lg md:text-xl mt-2" data-aos="fade-up" data-aos-delay="600">
                        {{ __('Votre excellent partenaire dans le domaine des mines et des carrières') }}
                    </p>
                    <a href="#about"
                        class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-full shadow-lg transition-all duration-300"
                        data-aos="zoom-in-up" data-aos-delay="900" data-aos-duration="1200">
                        {{ __('Voir Plus') }}
                    </a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center parallax-bg transition-transform duration-700 ease-in-out"
                style="background-size: cover; background-image: linear-gradient(rgba(17, 24, 39, 0.6), rgba(55, 65, 81, 0.6)), url('s5.jpg')">
                <div class="w-full px-4 md:px-8">
                    <div class="max-w-4xl mx-auto text-white">
                        <div class="text-left max-w-xl ml-0 mt-12 md:mt-24" data-aos="fade-down" data-aos-delay="300">
                            <h2 class="text-2xl md:text-5xl font-bold mb-4 leading-tight break-words">
                                La RDC, un pays d’opportunités minières
                            </h2>
                            <p class="text-base md:text-2xl mb-8 delay-200" data-aos="fade-up" data-aos-delay="600">
                                Scandale géologique ! La RDC est l’un des plus
                                grands pays de l'Afrique centrale dont les souterrains renferment une batterie des
                                métaux
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center transition-transform duration-700 ease-in-out"
                style="background-size: cover; background-image: linear-gradient(rgba(17, 24, 39, 0.6), rgba(55, 65, 81, 0.6)), url('s4.jpg')">
                <div class="w-full px-4 md:px-8">
                    <div class="max-w-2xl mx-auto text-start text-white">
                        <div class="text-left max-w-xl ml-0 md:ml-10 mt-12 md:mt-24" data-aos="fade-right"
                            data-aos-delay="300">
                            <h2 class="text-2xl md:text-6xl font-bold mb-4">
                                La RDC, pays riche en sous-sol
                            </h2>
                            <p class="text-base md:text-2xl mb-8 hero-element delay-200" data-aos="fade-up"
                                data-aos-delay="600">
                                La RDC possède des gisements riches et variés de plus d'une cinquantaine de minerais,
                                mais
                                seulement une douzaine est généralement exploitée.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center transition-transform duration-700 ease-in-out"
                style="background-size: cover; background-image: linear-gradient(rgba(17, 24, 39, 0.6), rgba(55, 65, 81, 0.6)), url('expertise.jpg')">
                <div class="w-full px-4 md:px-8">
                    <div class="max-w-2xl mx-auto text-start text-white">
                        <div class="text-left max-w-xl ml-0 md:ml-10 mt-12 md:mt-24" data-aos="fade-right"
                            data-aos-delay="300">
                            <h2 class="text-2xl md:text-6xl font-bold mb-4 hero-element">
                                La législation minière
                            </h2>
                            <p class="text-base md:text-2xl mb-8 hero-element" data-aos="fade-up" data-aos-delay="600">
                                La législation minière en la matière est la loi n°007/2002 du 11 juillet 2002 portant
                                code
                                minier tel que modifié.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 5 -->
            <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center transition-transform duration-700 ease-in-out"
                style="background-size: cover; background-image: linear-gradient(rgba(17, 24, 39, 0.6), rgba(55, 65, 81, 0.6)), url('avocat1.jpg')">
                <div class="w-full px-4 md:px-8">
                    <div class="max-w-2xl mx-auto text-start text-white">
                        <div class="text-left max-w-xl ml-0 md:ml-10 mt-12 md:mt-24">
                            <h2 class="text-2xl md:text-6xl font-bold mb-4 hero-element" data-aos="fade-right"
                                data-aos-duration="1000">
                                Mandataire en mines
                            </h2>
                            <p class="text-base md:text-2xl mb-8 hero-element">
                                « EMK MINES OFFICE » pris par la personne de l’Excellence
                                Ezéchiel MBWESSE KAMWESSE est
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contrôles du carousel -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex space-x-4 z-10">
            <button
                class="bg-white/30 hover:bg-white/50 w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white transition-all duration-300 animate-pulse hover:scale-100 hover:animate-none shadow-lg"
                id="prev-slide" data-aos="fade-up" data-aos-duration="1000">
                <i class="fas fa-chevron-left text-lg md:text-xl"></i>
            </button>
            <button
                class="bg-white/30 hover:bg-white/50 w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white transition-all duration-300 animate-pulse hover:scale-100 hover:animate-none shadow-lg"
                id="next-slide" data-aos="fade-up" data-aos-duration="1000">
                <i class="fas fa-chevron-right text-lg md:text-xl"></i>
            </button>
        </div>
    </div>
</section>
