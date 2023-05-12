<?php

use App\Http\Controllers\Auth\GithubController;
use App\Http\Livewire\Components\HomeScreen;
use App\Http\Livewire\Components\SplashScreen;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


Route::get('/', SplashScreen::class)->name('app.splash');
Route::get('home', HomeScreen::class)->name('app.home');


Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('socialite.redirect-github');

Route::get('/auth/github', GithubController::class);

