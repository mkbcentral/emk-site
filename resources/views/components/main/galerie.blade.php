 <!-- Section Galerie -->
 <section id="gallery" class="py-20 bg-white overflow-hidden" data-aos="fade-up">
     <div class="container mx-auto px-4">
         <div class="text-center mb-16" data-aos="fade-down">
             <h2 class="text-3xl font-bold text-blue-900 mb-4">Notre Galerie</h2>
             <p class="max-w-2xl mx-auto text-gray-600">Découvrez notre cabinet en images</p>
         </div>

         <div class="gallery-container relative">
             <div class="gallery-scroller flex space-x-6 overflow-x-auto pb-8 scroll-smooth">
                 <div class="gallery-item min-w-[300px] md:min-w-[400px] h-[300px] bg-cover bg-center rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300"
                     style="background-image: url('client3.jpg')" data-aos="zoom-in"></div>
                 <div class="gallery-item min-w-[300px] md:min-w-[400px] h-[300px] bg-cover bg-center rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300"
                     style="background-image: url('client2.jpg')" data-aos="zoom-in" data-aos-delay="100"></div>
                 <div class="gallery-item min-w-[300px] md:min-w-[400px] h-[300px] bg-cover bg-center rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300"
                     style="background-image: url('expertise.jpg')" data-aos="zoom-in" data-aos-delay="200"></div>
                 <div class="gallery-item min-w-[300px] md:min-w-[400px] h-[300px] bg-cover bg-center rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300"
                     style="background-image: url('client1.jpg')" data-aos="zoom-in" data-aos-delay="300"></div>
             </div>

             <div class="gallery-controls flex justify-center mt-6 space-x-4" data-aos="fade-up">
                 <button id="scroll-left"
                     class="w-12 h-12 rounded-full bg-blue-700 text-white flex items-center justify-center hover:bg-blue-800 transition-colors duration-300 focus:outline-none">
                     <i class="fas fa-chevron-left"></i>
                 </button>
                 <button id="scroll-right"
                     class="w-12 h-12 rounded-full bg-blue-700 text-white flex items-center justify-center hover:bg-blue-800 transition-colors duration-300 focus:outline-none">
                     <i class="fas fa-chevron-right"></i>
                 </button>
             </div>
         </div>
     </div>
 </section>
