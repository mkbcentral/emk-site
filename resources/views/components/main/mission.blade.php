@php
    $mission = App\Models\Mission::first();
    $missionDescription = $mission ? $mission->description : 'Details sur notre mission.';
    $ceo = App\Models\CeoInfo::first();
    $ceoName = $ceo ? $ceo->title : 'Nom du CEO';
@endphp

<div class="py-6 px-2 md:py-12 md:px-8 bg-white" data-aos="fade-up" data-aos-duration="1200">
    <!-- Quote Section -->
    <div
        class="my-6 md:my-10 bg-gradient-to-r from-gray-200 to-gray-100 rounded-lg shadow-lg p-4 md:p-6 text-gray-800 text-center relative overflow-hidden animate-fade-in">
        <div
            class="absolute top-0 left-0 w-16 h-16 md:w-24 md:h-24 bg-gray-300/10 rounded-full -translate-x-1/2 -translate-y-1/2 animate-pulse">
        </div>
        <div
            class="absolute bottom-0 right-0 w-20 h-20 md:w-32 md:h-32 bg-gray-300/10 rounded-full translate-x-1/3 translate-y-1/3 animate-pulse">
        </div>
        <div class="relative z-10">
            <i class="fas fa-quote-left text-2xl md:text-3xl text-gray-400 mb-2 md:mb-3"></i>
            <blockquote class="text-base md:text-lg italic font-light mb-2 md:mb-3 max-w-2xl mx-auto">
                {!! $missionDescription !!}
            </blockquote>
            <p class="font-bold text-sm md:text-base">{{ $ceoName }}</p>
        </div>
    </div>
</div>
