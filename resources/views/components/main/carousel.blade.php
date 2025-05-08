   <!-- Carousel avec animation -->
   <section class="pt-36">
       <div class="relative h-[600px] overflow-hidden" id="carousel">
           <div class="carousel-inner absolute w-full h-full flex transition-transform duration-700 ease-in-out">
               <!-- Slide 1 -->
               <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center"
                   style="background-image: linear-gradient(rgba(30, 58, 138, 0.6), rgba(30, 64, 175, 0.6)), url('expertise.jpg')">
                   <div class="container mx-auto px-4 text-white">
                       <div class="max-w-2xl mx-auto text-center">
                           <h2 class="text-4xl md:text-5xl font-bold mb-4 opacity-0 translate-y-10"
                               data-animation="slide-up">Bienvenue chez EMK</h2>
                           <p class="text-xl mb-8 opacity-0 translate-y-10" data-animation="slide-up">Votre partenaire
                               juridique de confiance dans le secteur minier</p>
                           <button
                               class="bg-white text-blue-900 px-8 py-3 rounded-full font-medium hover:bg-blue-100 transition-colors duration-300 opacity-0 scale-90"
                               data-animation="zoom-in">
                               Nos services
                           </button>
                       </div>
                   </div>
               </div>

               <!-- Slide 2 -->
               <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center"
                   style="background-image: url('expertise2.jpg')">
                   <div class="container mx-auto px-4">
                       <div class="max-w-2xl bg-white/90 p-8 rounded-lg opacity-0 -translate-x-10"
                           data-animation="slide-right">
                           <h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-900">Expertise juridique spécialisée
                           </h2>
                           <p class="text-lg mb-6">Nos avocats spécialisés vous accompagnent dans toutes vos démarches
                               juridiques minières.</p>
                           <button
                               class="bg-blue-700 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-800 transition-colors duration-300">
                               En savoir plus
                           </button>
                       </div>
                   </div>
               </div>

               <!-- Slide 3 -->
               <div class="carousel-slide min-w-full h-full bg-cover bg-center flex items-center"
                   style="background-image: linear-gradient(rgba(17, 24, 39, 0.6), rgba(55, 65, 81, 0.6)), url('expertise3.jpg')">
                   <div class="container mx-auto px-4 text-white">
                       <div class="max-w-2xl ml-auto bg-white/90 p-8 rounded-lg opacity-0 -translate-x-10"
                           data-animation="slide-right">
                           <h2 class="text-3xl md:text-4xl font-bold mb-4 text-blue-900">Solutions sur mesure</h2>
                           <p class="text-lg mb-6 text-gray-700">Des conseils personnalisés pour répondre aux exigences
                               spécifiques de votre activité minière.</p>
                           <button onclick="window.location.href='contact.html'"
                               class="bg-blue-700 text-white px-6 py-3 rounded-full font-medium hover:bg-blue-800 transition-colors duration-300">
                               Contactez-nous
                           </button>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Contrôles du carousel -->
           <button
               class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 w-12 h-12 rounded-full flex items-center justify-center text-white transition-all duration-300"
               id="prev-slide">
               <i class="fas fa-chevron-left text-xl"></i>
           </button>
           <button
               class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/30 hover:bg-white/50 w-12 h-12 rounded-full flex items-center justify-center text-white transition-all duration-300"
               id="next-slide">
               <i class="fas fa-chevron-right text-xl"></i>
           </button>

           <!-- Indicateurs -->
           <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex space-x-2" id="carousel-indicators">
               <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300 active"
                   data-slide="0"></button>
               <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                   data-slide="1"></button>
               <button class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                   data-slide="2"></button>
           </div>
       </div>
   </section>
