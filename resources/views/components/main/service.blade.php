@php
    $services = App\Models\Service::all();
@endphp
<!-- Section Services -->
<section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($services as $service)
                <!-- Service 1 -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2 transition-transform duration-300"
                    data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6 text-blue-700">
                        <i class="fas fa-balance-scale text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-blue-900">{{ $service->name }}</h3>
                    <p class="text-gray-600">{{ Str::limit($service->description, 120, '...') }}</p>
                    <div class="mt-4">
                        <a href="conseil-juridique.html"
                            class="text-blue-700 font-medium hover:text-blue-800 transition-colors duration-300 flex items-center">
                            En savoir plus² <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
