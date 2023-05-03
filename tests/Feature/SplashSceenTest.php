<?php

use function Pest\Laravel\get;

it('checks if home page is working')
    ->get('/')
    ->assertOK();

it('checks if SplashScreenComponent was rendered', function (){
    get('/')
        ->assertSeeLivewire('components.splash-screen');

});

