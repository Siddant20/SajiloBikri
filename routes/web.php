<?php

use App\Livewire\LandingPage;
use App\Livewire\Pages\CategoryIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class)->name('landing-page');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('category/{category}', CategoryIndex::class)->name('index.category');

require __DIR__ . '/auth.php';
