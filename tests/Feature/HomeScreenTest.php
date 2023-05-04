<?php

use function Pest\Laravel\get;

it('checks if home page is working')
    ->get('/home')
    ->assertOK();

it('checks if HomePageComponent was rendered', function () {
    get('/home')
        ->assertSeeLivewire('components.home-screen');
});
