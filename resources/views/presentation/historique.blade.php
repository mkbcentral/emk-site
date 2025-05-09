<x-layouts.app.main>
    <!-- Main Content with Hero Banner -->
    <section class="pt-36 bg-gradient-to-br from-blue-900 to-blue-700 text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Notre Histoire</h1>
                <p class="text-xl text-blue-100 mb-8">Découvrez l'évolution d'EMK Cabinet Juridique depuis sa fondation
                </p>
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
                                        <i class="fas fa-chart-line mr-2"></i> Expansion
                                    </button>
                                </li>
                                <li>
                                    <button data-section="realisations"
                                        class="history-nav-btn w-full text-left px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 font-medium flex items-center">
                                        <i class="fas fa-trophy mr-2"></i> Réalisations
                                    </button>
                                </li>
                                <li>
                                    <button data-section="equipe"
                                        class="history-nav-btn w-full text-left px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 font-medium flex items-center">
                                        <i class="fas fa-users mr-2"></i> Notre équipe
                                    </button>
                                </li>
                                <li>
                                    <button data-section="futur"
                                        class="history-nav-btn w-full text-left px-4 py-2 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-800 transition-colors duration-300 font-medium flex items-center">
                                        <i class="fas fa-rocket mr-2"></i> Vers l'avenir
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
                            <h2 class="text-3xl font-bold text-blue-900 mb-6">La fondation d'EMK</h2>

                            <div class="mb-8">
                                <img src="{{ asset('expertise3.jpg') }}" alt="Premiers bureaux EMK"
                                    class="w-full h-80 object-cover object-center rounded-xl shadow-md mb-4">
                                <p class="text-gray-500 text-sm italic">Les premiers bureaux d'EMK Cabinet Juridique à
                                    Lubumbashi, 2025</p>
                            </div>

                            <div class="prose max-w-none text-gray-700 space-y-4">
                                <p>
                                    EMK Cabinet Juridique de Suivi Minier a vu le jour en 2010, fondé par Me. Emmanuel
                                    Mukendi Kabeya avec une vision claire : offrir une expertise juridique de premier
                                    plan aux acteurs du secteur minier en République Démocratique du Congo.
                                </p>

                                <p>
                                    Après avoir passé une décennie comme conseiller juridique principal pour plusieurs
                                    grandes entreprises minières internationales opérant en RDC, Me. Mukendi a identifié
                                    un besoin crucial pour un cabinet juridique spécialisé qui comprendrait à la fois
                                    les complexités du droit minier congolais et les exigences des investisseurs
                                    internationaux.
                                </p>

                                <p>
                                    Les débuts du cabinet ont été modestes, avec une petite équipe de 5 personnes
                                    travaillant dans un bureau de deux pièces au centre de Kinshasa. Malgré ces
                                    ressources limitées, l'expertise et la réputation de Me. Mukendi ont rapidement
                                    attiré l'attention des acteurs majeurs du secteur minier, permettant au cabinet de
                                    se développer rapidement.
                                </p>

                                <blockquote class="bg-blue-50 p-6 rounded-xl border-l-4 border-blue-700 italic">
                                    "Lorsque j'ai fondé EMK Cabinet Juridique, mon objectif était de créer un pont entre
                                    le cadre juridique minier congolais et les standards internationaux, afin de
                                    faciliter des investissements responsables qui profiteraient à tous les acteurs
                                    impliqués."
                                    <footer class="text-right font-medium text-blue-900 mt-2">— Me. Emmanuel Mukendi
                                        Kabeya, Fondateur</footer>
                                </blockquote>

                                <p>
                                    Dès sa création, le cabinet s'est distingué par son approche novatrice combinant une
                                    expertise juridique pointue et une compréhension approfondie des réalités
                                    opérationnelles du secteur minier. Cette double compétence a permis à EMK de
                                    proposer des solutions juridiques pragmatiques et efficaces à ses clients.
                                </p>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Les premiers défis</h3>

                                <p>
                                    Les premières années d'existence du cabinet ont coïncidé avec une période de
                                    changements majeurs dans le secteur minier congolais. Le pays sortait d'une période
                                    d'instabilité politique et le gouvernement cherchait à réformer son cadre législatif
                                    minier pour attirer davantage d'investissements étrangers.
                                </p>

                                <p>
                                    Dans ce contexte, EMK Cabinet Juridique a joué un rôle consultatif clé, participant
                                    activement aux discussions sur les réformes législatives et aidant ses clients à
                                    naviguer dans ce paysage juridique en évolution.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                                    <div class="bg-white p-6 rounded-xl shadow-md">
                                        <h4 class="font-semibold text-blue-800 mb-2">2010</h4>
                                        <p class="text-gray-700">Fondation d'EMK Cabinet Juridique à Kinshasa avec une
                                            équipe de 5 personnes</p>
                                    </div>
                                    <div class="bg-white p-6 rounded-xl shadow-md">
                                        <h4 class="font-semibold text-blue-800 mb-2">2011</h4>
                                        <p class="text-gray-700">Premier mandat majeur avec une compagnie minière
                                            internationale</p>
                                    </div>
                                    <div class="bg-white p-6 rounded-xl shadow-md">
                                        <h4 class="font-semibold text-blue-800 mb-2">2012</h4>
                                        <p class="text-gray-700">Développement de la pratique en droit environnemental
                                            minier</p>
                                    </div>
                                    <div class="bg-white p-6 rounded-xl shadow-md">
                                        <h4 class="font-semibold text-blue-800 mb-2">2013</h4>
                                        <p class="text-gray-700">Inauguration des nouveaux locaux et doublement de
                                            l'équipe juridique</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Expansion Section -->
                        <div id="expansion" class="history-section hidden">
                            <h2 class="text-3xl font-bold text-blue-900 mb-6">Phase d'expansion (2015-2019)</h2>

                            <div class="mb-8">
                                <img src="about.png" alt="L'équipe EMK en pleine expansion"
                                    class="w-full h-80 object-cover object-center rounded-xl shadow-md mb-4">
                                <p class="text-gray-500 text-sm italic">L'équipe d'EMK lors de l'inauguration des
                                    nouveaux bureaux en 2015</p>
                            </div>

                            <div class="prose max-w-none text-gray-700 space-y-4">
                                <p>
                                    L'année 2015 marque un tournant décisif dans l'histoire du cabinet avec
                                    l'inauguration de nouveaux locaux beaucoup plus spacieux au cœur du quartier des
                                    affaires de Kinshasa. Cette expansion physique reflétait la croissance rapide du
                                    cabinet, qui avait plus que quadruplé son effectif en l'espace de cinq ans.
                                </p>

                                <p>
                                    Cette période d'expansion a été caractérisée par plusieurs développements majeurs :
                                </p>

                                <ul class="list-disc pl-6 space-y-2">
                                    <li>
                                        <strong>Diversification des expertises :</strong> Le cabinet a élargi son champ
                                        d'expertise au-delà du droit minier strict pour couvrir également les aspects
                                        environnementaux, sociaux et de gouvernance (ESG) liés aux activités minières.
                                    </li>
                                    <li>
                                        <strong>Internationalisation :</strong> EMK a développé des partenariats
                                        stratégiques avec des cabinets juridiques internationaux, permettant d'offrir à
                                        ses clients une expertise juridique transfrontalière.
                                    </li>
                                    <li>
                                        <strong>Formation spécialisée :</strong> Le cabinet a lancé un programme de
                                        formation continue pour ses avocats, avec des modules spécialisés en droit
                                        minier international et en résolution des conflits.
                                    </li>
                                    <li>
                                        <strong>Engagement communautaire :</strong> EMK a initié plusieurs projets pro
                                        bono visant à soutenir les communautés locales affectées par les activités
                                        minières.
                                    </li>
                                </ul>

                                <div class="flex flex-col md:flex-row gap-6 my-8">
                                    <div class="md:w-1/2">
                                        <img src="slide1_background.png" alt="Consultation avec clients"
                                            class="w-full h-60 object-cover rounded-xl shadow-md">
                                        <p class="text-gray-500 text-sm italic mt-2">Session de consultation avec des
                                            clients internationaux, 2017</p>
                                    </div>
                                    <div class="md:w-1/2">
                                        <img src="slide3_background.png" alt="Formation juridique"
                                            class="w-full h-60 object-cover rounded-xl shadow-md">
                                        <p class="text-gray-500 text-sm italic mt-2">Formation juridique pour les
                                            nouveaux membres de l'équipe, 2018</p>
                                    </div>
                                </div>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Participation à la réforme du
                                    Code minier</h3>

                                <p>
                                    L'un des accomplissements majeurs du cabinet pendant cette période a été sa
                                    participation active aux consultations pour la révision du Code Minier congolais en
                                    2018. L'expertise de Me. Mukendi et de son équipe a été sollicitée pour contribuer à
                                    l'élaboration d'un cadre réglementaire plus adapté aux réalités du secteur.
                                </p>

                                <p>
                                    Cette implication a non seulement renforcé la position d'EMK comme acteur
                                    incontournable du droit minier congolais, mais a aussi démontré son engagement
                                    envers un développement durable du secteur minier dans le pays.
                                </p>

                                <div class="bg-blue-50 p-6 rounded-xl mt-8">
                                    <h4 class="font-semibold text-blue-800 mb-4">Chiffres clés de la phase d'expansion
                                    </h4>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                                        <div>
                                            <p class="text-3xl font-bold text-blue-700">25+</p>
                                            <p class="text-gray-600">Avocats spécialisés</p>
                                        </div>
                                        <div>
                                            <p class="text-3xl font-bold text-blue-700">100+</p>
                                            <p class="text-gray-600">Clients satisfaits</p>
                                        </div>
                                        <div>
                                            <p class="text-3xl font-bold text-blue-700">3</p>
                                            <p class="text-gray-600">Bureaux régionaux</p>
                                        </div>
                                        <div>
                                            <p class="text-3xl font-bold text-blue-700">15+</p>
                                            <p class="text-gray-600">Partenariats internationaux</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Réalisations Section -->
                        <div id="realisations" class="history-section hidden">
                            <h2 class="text-3xl font-bold text-blue-900 mb-6">Nos principales réalisations</h2>

                            <div class="prose max-w-none text-gray-700 space-y-4">
                                <p>
                                    Au cours de ses années d'existence, EMK Cabinet Juridique a accompli de nombreuses
                                    réalisations significatives qui ont contribué à façonner le paysage juridique minier
                                    en RDC et à renforcer sa réputation d'excellence.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
                                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                                        <div class="h-48 bg-blue-800 relative flex items-center justify-center">
                                            <i class="fas fa-balance-scale text-white text-5xl"></i>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-xl font-semibold text-blue-900 mb-3">Contribution aux
                                                réformes législatives</h3>
                                            <p class="text-gray-600 mb-4">Notre cabinet a joué un rôle consultatif clé
                                                dans la révision du Code Minier congolais en 2018, apportant son
                                                expertise pour améliorer le cadre réglementaire du secteur.</p>
                                        </div>
                                    </div>

                                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                                        <div class="h-48 bg-blue-700 relative flex items-center justify-center">
                                            <i class="fas fa-handshake text-white text-5xl"></i>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-xl font-semibold text-blue-900 mb-3">Négociation de
                                                contrats majeurs</h3>
                                            <p class="text-gray-600 mb-4">EMK a négocié avec succès plus de 50 contrats
                                                miniers d'envergure, représentant un investissement total de plus de 5
                                                milliards de dollars dans le secteur minier congolais.</p>
                                        </div>
                                    </div>

                                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                                        <div class="h-48 bg-blue-600 relative flex items-center justify-center">
                                            <i class="fas fa-university text-white text-5xl"></i>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-xl font-semibold text-blue-900 mb-3">Résolution de litiges
                                                complexes</h3>
                                            <p class="text-gray-600 mb-4">Notre équipe a résolu avec succès plusieurs
                                                litiges miniers majeurs, établissant des précédents juridiques
                                                importants pour le secteur extractif congolais.</p>
                                        </div>
                                    </div>

                                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                                        <div class="h-48 bg-blue-500 relative flex items-center justify-center">
                                            <i class="fas fa-graduation-cap text-white text-5xl"></i>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-xl font-semibold text-blue-900 mb-3">Formation et
                                                renforcement des capacités</h3>
                                            <p class="text-gray-600 mb-4">EMK a formé plus de 200 juristes congolais
                                                aux spécificités du droit minier, contribuant au développement des
                                                compétences locales dans ce domaine spécialisé.</p>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Reconnaissance internationale
                                </h3>

                                <p>
                                    Au fil des ans, EMK Cabinet Juridique a reçu plusieurs distinctions qui témoignent
                                    de l'excellence de ses services et de son impact sur le secteur minier :
                                </p>

                                <ul class="list-disc pl-6 space-y-2">
                                    <li><strong>2016 :</strong> Classé parmi les 5 meilleurs cabinets juridiques
                                        spécialisés en droit minier en Afrique centrale par Legal 500.</li>
                                    <li><strong>2018 :</strong> Prix de l'excellence juridique décerné par l'Association
                                        du Barreau Congolais.</li>
                                    <li><strong>2020 :</strong> Reconnaissance spéciale pour sa contribution au
                                        développement durable du secteur minier par la Chambre des Mines de la RDC.</li>
                                    <li><strong>2022 :</strong> Me. Mukendi nommé parmi les 50 juristes africains les
                                        plus influents par African Business Law.</li>
                                </ul>

                                <div class="my-8">
                                    <img src="sponsors_background.png" alt="Cérémonie de remise de prix"
                                        class="w-full h-80 object-cover object-center rounded-xl shadow-md mb-4">
                                    <p class="text-gray-500 text-sm italic">Cérémonie de remise du prix d'excellence
                                        juridique, 2018</p>
                                </div>

                                <blockquote class="bg-blue-50 p-6 rounded-xl border-l-4 border-blue-700 italic">
                                    "Les réalisations d'EMK Cabinet Juridique démontrent qu'il est possible de combiner
                                    excellence juridique et engagement pour un développement durable du secteur minier.
                                    C'est cette vision qui nous a guidés depuis notre fondation."
                                    <footer class="text-right font-medium text-blue-900 mt-2">— Me. Emmanuel Mukendi
                                        Kabeya</footer>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Équipe Section -->
                        <div id="equipe" class="history-section hidden">
                            <h2 class="text-3xl font-bold text-blue-900 mb-6">L'évolution de notre équipe</h2>

                            <div class="mb-8">
                                <img src="about.png" alt="L'équipe EMK"
                                    class="w-full h-80 object-cover object-center rounded-xl shadow-md mb-4">
                                <p class="text-gray-500 text-sm italic">L'équipe d'EMK Cabinet Juridique lors du 10ème
                                    anniversaire, 2020</p>
                            </div>

                            <div class="prose max-w-none text-gray-700 space-y-4">
                                <p>
                                    L'une des plus grandes fiertés d'EMK Cabinet Juridique est son équipe de
                                    professionnels hautement qualifiés, qui s'est développée et diversifiée au fil des
                                    années. Cette évolution reflète non seulement la croissance du cabinet, mais aussi
                                    son engagement envers l'excellence et le développement des talents locaux.
                                </p>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Des débuts modestes</h3>

                                <p>
                                    En 2010, EMK a démarré avec une équipe de seulement 5 personnes : Me. Mukendi
                                    lui-même, deux avocats juniors, un assistant juridique et une secrétaire
                                    administrative. Cette petite équipe très soudée a établi les fondations de la
                                    culture d'excellence et de collégialité qui caractérise toujours le cabinet
                                    aujourd'hui.
                                </p>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Croissance et diversification
                                </h3>

                                <p>
                                    À mesure que le cabinet se développait, l'équipe s'est agrandie et diversifiée pour
                                    répondre aux besoins croissants des clients et couvrir un éventail plus large
                                    d'expertises juridiques :
                                </p>

                                <div class="overflow-x-auto my-6">
                                    <table class="min-w-full bg-white rounded-xl shadow-md">
                                        <thead class="bg-blue-700 text-white">
                                            <tr>
                                                <th class="py-3 px-4 text-left">Année</th>
                                                <th class="py-3 px-4 text-left">Taille de l'équipe</th>
                                                <th class="py-3 px-4 text-left">Composition</th>
                                                <th class="py-3 px-4 text-left">Répartition hommes/femmes</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td class="py-3 px-4">2010</td>
                                                <td class="py-3 px-4">5 personnes</td>
                                                <td class="py-3 px-4">3 avocats, 2 personnels administratifs</td>
                                                <td class="py-3 px-4">60% hommes, 40% femmes</td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 px-4">2015</td>
                                                <td class="py-3 px-4">15 personnes</td>
                                                <td class="py-3 px-4">10 avocats, 5 personnels administratifs</td>
                                                <td class="py-3 px-4">55% hommes, 45% femmes</td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 px-4">2020</td>
                                                <td class="py-3 px-4">30 personnes</td>
                                                <td class="py-3 px-4">20 avocats, 5 experts techniques, 5 personnels
                                                    administratifs</td>
                                                <td class="py-3 px-4">50% hommes, 50% femmes</td>
                                            </tr>
                                            <tr>
                                                <td class="py-3 px-4">2023</td>
                                                <td class="py-3 px-4">45 personnes</td>
                                                <td class="py-3 px-4">25 avocats, 10 experts techniques, 10 personnels
                                                    administratifs</td>
                                                <td class="py-3 px-4">48% hommes, 52% femmes</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <p>
                                    Cette évolution reflète non seulement la croissance numérique, mais aussi
                                    l'engagement d'EMK envers la diversité et l'inclusion. Le cabinet a fait des efforts
                                    conscients pour atteindre la parité homme-femme et pour intégrer des profils variés,
                                    enrichissant ainsi sa culture organisationnelle et sa capacité à répondre aux
                                    besoins diversifiés de sa clientèle.
                                </p>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Développement des talents
                                    locaux</h3>

                                <p>
                                    Un aspect remarquable de l'évolution de l'équipe d'EMK est son engagement envers le
                                    développement des talents juridiques congolais. Le cabinet a mis en place plusieurs
                                    initiatives dans ce sens :
                                </p>

                                <ul class="list-disc pl-6 space-y-2">
                                    <li><strong>Programme de stages :</strong> Chaque année, EMK accueille 5 à 10
                                        stagiaires issus des facultés de droit congolaises, leur offrant une expérience
                                        pratique précieuse dans le domaine du droit minier.</li>
                                    <li><strong>Mentorat interne :</strong> Chaque avocat junior est jumelé avec un
                                        avocat senior qui guide son développement professionnel.</li>
                                    <li><strong>Formation continue :</strong> Le cabinet investit significativement dans
                                        la formation continue de ses collaborateurs, finançant des certifications
                                        spécialisées et des séminaires internationaux.</li>
                                    <li><strong>Mobilité internationale :</strong> Des échanges avec des cabinets
                                        partenaires à l'étranger permettent aux avocats d'EMK d'élargir leur perspective
                                        et de se familiariser avec les pratiques juridiques internationales.</li>
                                </ul>

                                <div class="bg-blue-50 p-6 rounded-xl my-8">
                                    <h4 class="font-semibold text-blue-800 mb-4">Témoignage d'un membre historique de
                                        l'équipe</h4>
                                    <blockquote class="italic">
                                        "Lorsque j'ai rejoint EMK comme jeune avocat fraîchement diplômé en 2011, je
                                        n'aurais jamais imaginé le parcours extraordinaire qui m'attendait. Le cabinet
                                        m'a offert bien plus qu'un emploi - c'était une véritable école où j'ai pu
                                        développer mon expertise en droit minier, mais aussi ma confiance
                                        professionnelle. Aujourd'hui, en tant que responsable du département de droit
                                        environnemental, je m'efforce de transmettre ce même esprit de mentorat aux
                                        nouvelles générations d'avocats qui nous rejoignent."
                                        <footer class="text-right font-medium text-blue-900 mt-2">— Me. Robert Mbala,
                                            avec EMK depuis 2011</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>

                        <!-- Vers l'avenir Section -->
                        <div id="futur" class="history-section hidden">
                            <h2 class="text-3xl font-bold text-blue-900 mb-6">EMK Cabinet Juridique : vers l'avenir
                            </h2>

                            <div class="mb-8">
                                <img src="slide1_background.png" alt="Vision d'avenir"
                                    class="w-full h-80 object-cover object-center rounded-xl shadow-md mb-4">
                                <p class="text-gray-500 text-sm italic">Réunion stratégique sur les orientations
                                    futures du cabinet, 2023</p>
                            </div>

                            <div class="prose max-w-none text-gray-700 space-y-4">
                                <p>
                                    Alors qu'EMK Cabinet Juridique entre dans sa deuxième décennie d'existence, le
                                    cabinet s'appuie sur ses réalisations passées tout en se tournant résolument vers
                                    l'avenir. La vision stratégique pour les années à venir s'articule autour de
                                    plusieurs axes de développement clés.
                                </p>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Expansion régionale</h3>

                                <p>
                                    Fort de son succès en RDC, EMK prévoit d'étendre sa présence dans d'autres pays
                                    d'Afrique centrale et australe riches en ressources minières. Des bureaux sont déjà
                                    en cours d'établissement en Zambie et au Rwanda, et des partenariats stratégiques
                                    sont en développement dans plusieurs autres pays.
                                </p>

                                <p>
                                    Cette expansion permettra au cabinet d'offrir à ses clients une expertise juridique
                                    cohérente à travers plusieurs juridictions, facilitant ainsi leurs opérations
                                    transfrontalières dans la région.
                                </p>

                                <div class="flex flex-col md:flex-row gap-6 my-8">
                                    <div class="md:w-1/2">
                                        <img src="office.png" alt="Futurs bureaux régionaux"
                                            class="w-full h-60 object-cover rounded-xl shadow-md">
                                        <p class="text-gray-500 text-sm italic mt-2">Maquette architecturale des futurs
                                            bureaux régionaux</p>
                                    </div>
                                    <div class="md:w-1/2 bg-blue-50 p-6 rounded-xl">
                                        <h4 class="font-semibold text-blue-800 mb-3">Plan d'expansion régionale</h4>
                                        <ul class="space-y-2">
                                            <li class="flex items-center">
                                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                                <span><strong>2023 :</strong> Ouverture du bureau de Lusaka,
                                                    Zambie</span>
                                            </li>
                                            <li class="flex items-center">
                                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                                <span><strong>2024 :</strong> Ouverture du bureau de Kigali,
                                                    Rwanda</span>
                                            </li>
                                            <li class="flex items-center">
                                                <i class="fas fa-clock text-blue-500 mr-2"></i>
                                                <span><strong>2025 :</strong> Partenariats prévus au Ghana et au
                                                    Mozambique</span>
                                            </li>
                                            <li class="flex items-center">
                                                <i class="fas fa-clock text-blue-500 mr-2"></i>
                                                <span><strong>2026 :</strong> Expansion envisagée en Afrique de
                                                    l'Ouest</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Transformation numérique</h3>

                                <p>
                                    Conscient des défis et opportunités de l'ère numérique, EMK s'est engagé dans un
                                    ambitieux programme de transformation numérique visant à améliorer l'efficacité de
                                    ses services et à enrichir l'expérience client.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
                                    <div class="bg-white p-6 rounded-xl shadow-md">
                                        <div
                                            class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-700 mb-4">
                                            <i class="fas fa-laptop-code text-xl"></i>
                                        </div>
                                        <h4 class="font-semibold text-blue-800 mb-2">Plateforme Client EMK</h4>
                                        <p class="text-gray-600">Portail sécurisé permettant aux clients d'accéder à
                                            leurs dossiers, documents et factures en temps réel.</p>
                                    </div>

                                    <div class="bg-white p-6 rounded-xl shadow-md">
                                        <div
                                            class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-700 mb-4">
                                            <i class="fas fa-robot text-xl"></i>
                                        </div>
                                        <h4 class="font-semibold text-blue-800 mb-2">IA juridique</h4>
                                        <p class="text-gray-600">Utilisation de l'intelligence artificielle pour
                                            l'analyse de contrats et la veille juridique automatisée.</p>
                                    </div>

                                    <div class="bg-white p-6 rounded-xl shadow-md">
                                        <div
                                            class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center text-blue-700 mb-4">
                                            <i class="fas fa-video text-xl"></i>
                                        </div>
                                        <h4 class="font-semibold text-blue-800 mb-2">Conseil juridique à distance</h4>
                                        <p class="text-gray-600">Service de consultation juridique par visioconférence
                                            pour les clients internationaux et les régions éloignées.</p>
                                    </div>
                                </div>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Focus sur le développement
                                    durable</h3>

                                <p>
                                    L'avenir du secteur minier est indissociable des enjeux de développement durable.
                                    EMK renforce son expertise dans les domaines de la conformité ESG (Environnementale,
                                    Sociale et de Gouvernance) et du droit climatique appliqué au secteur extractif.
                                </p>

                                <p>
                                    Le cabinet a récemment créé une division dédiée à la transition énergétique et aux
                                    minéraux stratégiques, positionnant EMK à l'avant-garde des défis juridiques liés à
                                    la décarbonation de l'économie mondiale et au développement des chaînes
                                    d'approvisionnement responsables.
                                </p>

                                <blockquote class="bg-blue-50 p-6 rounded-xl border-l-4 border-blue-700 italic my-8">
                                    "Notre vision pour l'avenir d'EMK Cabinet Juridique est d'être non seulement un
                                    leader en droit minier africain, mais aussi un catalyseur de changement positif dans
                                    le secteur. Nous voulons contribuer à façonner un secteur minier plus responsable,
                                    inclusif et durable, qui crée de la valeur partagée pour tous les acteurs
                                    impliqués."
                                    <footer class="text-right font-medium text-blue-900 mt-2">— Me. Emmanuel Mukendi
                                        Kabeya, perspective 2023</footer>
                                </blockquote>

                                <h3 class="text-xl font-semibold text-blue-800 mt-8 mb-4">Engagement continu envers
                                    l'excellence</h3>

                                <p>
                                    Alors qu'EMK se projette vers l'avenir, le cabinet reste fidèle aux valeurs
                                    fondamentales qui ont fait son succès : l'excellence juridique, l'intégrité
                                    professionnelle et l'engagement envers ses clients.
                                </p>

                                <p>
                                    Ces principes continueront de guider chaque aspect de son développement, assurant
                                    que la croissance et l'innovation s'accompagnent toujours du maintien des plus hauts
                                    standards de qualité et d'éthique professionnelle.
                                </p>

                                <div class="text-center mt-10">
                                    <a href="contact.html"
                                        class="inline-block bg-blue-700 text-white px-8 py-4 rounded-lg font-medium hover:bg-blue-800 transition-colors duration-300 shadow-lg">
                                        Joignez-vous à notre aventure
                                    </a>
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
