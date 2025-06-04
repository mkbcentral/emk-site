 @php
     $partners = App\Models\Partner::all();
 @endphp
 <!-- Section Sponsors -->
 <section id="sponsors" class="py-20"
     style="background-image: url('hero.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
     <div class="container mx-auto px-4">
         <div class="flex flex-wrap justify-center items-center gap-12 animate-on-scroll" data-animation="fade-up">
             @foreach ($partners as $partner)
                 <div class="sponsor-card text-lg md:text-2xl uppercase text-center font-bold text-gray-700 bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 w-64 h-40 flex items-center justify-center float-animation"
                     style="animation-delay: 0s;">
                     <h2>{{ $partner->name }}</h2>
                 </div>
             @endforeach
         </div>
     </div>
 </section>
