<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('logo-2.png') }}" sizes="any">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('main-2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
        }

        .sponsors-wave {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('sponsors_wave.png');
            background-size: cover;
            background-position: center;
            opacity: 0.5;
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        #contact-info-section {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: top;
        }

        /* PowerPoint-style slide transitions */
        .carousel-slide {
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.7s ease;
            transform-origin: center;
        }

        .carousel-slide.active {
            z-index: 2;
        }

        .carousel-slide.fade-out {
            opacity: 0;
            transform: scale(0.8) translateY(-30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .carousel-slide.fade-in {
            opacity: 1;
            transform: scale(1) translateY(0);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .carousel-slide.slide-out-left {
            transform: translateX(-100%) rotate(-5deg);
            opacity: 0;
        }

        .carousel-slide.slide-in-right {
            transform: translateX(0) rotate(0);
            opacity: 1;
        }

        .carousel-slide.slide-out-right {
            transform: translateX(100%) rotate(5deg);
            opacity: 0;
        }

        .carousel-slide.slide-in-left {
            transform: translateX(0) rotate(0);
            opacity: 1;
        }

        .carousel-slide.zoom-out {
            transform: scale(0.5);
            opacity: 0;
        }

        .carousel-slide.zoom-in {
            transform: scale(1);
            opacity: 1;
        }

        .carousel-slide.rotate-out {
            transform: rotate(90deg) scale(0.5);
            opacity: 0;
        }

        .carousel-slide.rotate-in {
            transform: rotate(0) scale(1);
            opacity: 1;
        }
    </style>
    @stack('styles')
</head>

<body class="font-['Poppins'] bg-gray-50 text-gray-800">
    <!-- Scroll Progress Indicator -->
    <div id="scroll-progress" class="h-1 bg-blue-500 fixed top-0 left-0 z-[100] w-0"></div>
    @include('partials.navabar')
    {{ $slot }}
    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-8 right-8 bg-blue-700 hover:bg-blue-800 text-white w-12 h-12 rounded-full shadow-lg z-50 hidden items-center justify-center transition-all duration-300 transform hover:scale-110">
        <i class="fas fa-arrow-up"></i>
    </button>
    @include('partials.footer')
    <script src="{{ asset('my-script-2.js') }}"></script>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    @stack('scripts')
</body>

</html>
