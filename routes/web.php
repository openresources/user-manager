<?php

Route::middleware('web')->group(function () {
    Route::prefix(config('app.admin-prefix') . '/user-manager')->group(function () {
        route::middleware('auth')->group(function () {
            // Route::livewire('/', 'livewire-demo')->layout("tacora::layout.layout__livewire");

            dump('ook Admin Users');
        });
    });
});
