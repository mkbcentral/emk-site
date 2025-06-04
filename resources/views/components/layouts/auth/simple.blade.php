<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="h-screen login-background">
    <div class="h-full w-full flex items-center justify-center login-container">
        <div class="max-w-sm w-full space-y-6 p-8 bg-white rounded-xl shadow-lg">
            <div class="text-center">
                <img class="mx-auto h-14 w-auto" src="{{ asset('logo.jpg') }}" alt="Cabinet Minier Logo">
                <h2 class="mt-4 text-2xl font-extrabold text-gray-900">{{ config('app.name') }}</h2>
                <p class="mt-1 text-sm text-gray-600">Cabinet du mandataire en mines et carrières</p>
            </div>
            {{ $slot }}
            <div class="pt-3 text-center border-t border-gray-200">
                <p class="text-xs text-gray-500">
                    &copy;&copy; 2025 {{ config('app.name') }}. Tous droits réservés.
                </p>
            </div>
        </div>
    </div>


</body>

</html>
