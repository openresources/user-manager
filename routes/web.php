<?php

Route::middleware('web')->group(function () {
    Route::prefix(config('user-manager.admin_prefix') . '/user-manager')
        ->name('user-manager.')
        ->group(function () {
            route::middleware('auth')->group(function () {
                Route::livewire('/', 'user-manager::user-manager.home')
                    ->layout(config('user-manager.livewire_shell_template'))
                    ->name('index');
                Route::livewire('/bulk-actions', 'user-manager::user-manager.bulk-actions.index')
                    ->layout(config('user-manager.livewire_shell_template'))
                    ->name('bulk-actions.index');
            });
        });
});
