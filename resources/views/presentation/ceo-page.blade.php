@php
    $ceo = App\Models\CeoInfo::first();
@endphp
<x-layouts.app.main>
    <!-- Main Content with Hero Banner -->
    <section class="pt-36 bg-gradient-to-br from-blue-900 to-blue-700 text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $ceo->title }}</h1>
                <p class="text-xl text-blue-100 mb-8">{{ $ceo->subtitle }}</p>
            </div>
        </div>
        <div class="wave-divider h-20 bg-bottom bg-no-repeat bg-cover"
            style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 1440 320\'%3E%3Cpath fill=\'%23F9FAFB\' fill-opacity=\'1\' d=\'M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\'%3E%3C/path%3E%3C/svg%3E');">
        </div>
    </section>

    <!-- Profile Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-1/3 animate-on-scroll" data-animation="fade-right">
                        <div class="relative">
                            <div class="absolute inset-0 bg-blue-100 rounded-xl transform rotate-6"></div>
                            <img src="{{ asset('storage/' . $ceo->image) }}" alt="Me. Emmanuel Mukendi Kabeya"
                                class="relative rounded-xl shadow-lg w-full object-cover h-[600px]">
                        </div>


                    </div>

                    <div class="lg:w-2/3 animate-on-scroll" data-animation="fade-left">
                        <div class="bg-white rounded-xl shadow-md p-8 mb-8">
                            <h2 class="text-3xl font-bold text-blue-900 mb-6">Biographie</h2>
                            <div class="prose max-w-none text-gray-600 space-y-4">
                                {{ $ceo->description }}

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
