<section id="about" class="py-20 relative overflow-hidden"
    style="background: linear-gradient(135deg, #0a2342 0%, #102542 100%); color: #fff;">
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 animate-on-scroll" data-animation="fade-right">
                <img src="{{ asset('expertises.jpg') }}" alt="Notre équipe" class="rounded-xl shadow-xl w-full">
            </div>
            <div class="md:w-1/2 animate-on-scroll" data-animation="fade-left">
                <h2 class="text-3xl font-bold text-white mb-6">À propos d' {{ config('app.name') }}</h2>
                <p class="text-blue-100 mb-4">
                    En tant qu’acteur important dans le secteur minier, EMK Mines office assure efficacement sur base
                    de son expertise dans le domaine, sa triple mission légale et ce, sur toute l’étendue de la
                    République Démocratique du Congo : représenter, conseiller et assister toute personne physique ou
                    morale intéressée dans l’octroi et l’exercice des droits miniers et de carrières ainsi que dans les
                    contentieux y afférent.
                    EMK Mines Office offre la domiciliation aux entreprises tant nationales qu’étrangères conformément
                    aux prescrits de la loi en la matière.
                </p>
                <a href="/"
                    class="inline-block mt-4 bg-white text-blue-700 px-4 py-2 rounded-lg font-medium hover:bg-blue-800 transition-colors duration-300 items-center space-x-2">
                    <span>En savoir plus <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</section>
