<?php

use App\Livewire\MainConfigurationPage;
use App\Livewire\Pages\Content\AboutContentPage;
use App\Livewire\Pages\Content\CeoInfoContentPage;
use App\Livewire\Pages\Content\GalleryContentPage;
use App\Livewire\Pages\Content\MissionContentPage;
use App\Livewire\Pages\Content\PartnerContentPage;
use App\Livewire\Pages\Content\ServiceContentPage;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\Mission;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('contact-page');
})->name('contact');
Route::get('/galerie', function () {
    return view('galerie-page');
})->name('galerie');

Route::prefix('presentation')->group(function () {
    Route::get('historique', function () {
        return view('presentation.historique');
    })->name('historique');
    Route::get('ceo', function () {
        return view('presentation.ceo-page');
    })->name('ceo');
});





Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('configuration', MainConfigurationPage::class)
        ->name('configuration');
    Route::prefix('content')->group(function () {
        Route::get('service', ServiceContentPage::class)
            ->name('service');
        Route::get('about', AboutContentPage::class)
            ->name('about.content');
        Route::get('mission', MissionContentPage::class)
            ->name('mission.content');
        Route::get('ceo-info', CeoInfoContentPage::class)
            ->name('ceo.content');
        Route::get('gallery-info', GalleryContentPage::class)
            ->name('gallery.content');
        Route::get('partner', PartnerContentPage::class)
            ->name('partner.content');
    });


    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
