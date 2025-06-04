@php
    $ceo = App\Models\CeoInfo::first();
@endphp
<!-- Section DG (Director General) -->
<section id="director" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/3 animate-on-scroll" data-animation="fade-right">
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-100 rounded-xl transform rotate-6"></div>
                    <img src="{{ asset('avocat1.jpg') }}" alt="Directeur Général"
                        class="relative rounded-xl shadow-lg w-full object-cover h-[500px]">
                </div>
            </div>
            <div class="lg:w-2/3 animate-on-scroll bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-xl shadow-md"
                data-animation="fade-left">
                <h2 class="text-3xl font-bold text-blue-900 mb-3">{{ $ceo->title }}</h2>
                <p class="text-xl text-blue-700 font-medium mb-6">{{ $ceo->subtitle }}</p>
                <p class="text-gray-600 mb-4">

                    {!! Str::limit($ceo->description, 500, '...') !!}
                </p>
                <a href="{{ route('ceo') }}"
                    class="inline-block mt-4 bg-blue-700 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-800 transition-colors duration-300 items-center space-x-2">
                    <span>En savoir plus <i class="fas fa-arrow-right"></i></span>

                </a>
            </div>
        </div>
    </div>
</section>
