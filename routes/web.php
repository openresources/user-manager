<?php

Route::middleware('web')->group(function () {
    Route::prefix(config('user-manager.admin_prefix') . '/user-manager')
        ->name('user-manager.')
        ->group(function () {
            route::middleware('auth')->group(function () {
                Route::namespace('Openresources\UserManager\Http\Controllers')->group(function () {
                    Route::get('bulk/samples', 'Bulk\SamplesController@index')
                        ->name('bulk.samples.index');

                    Route::post('bulk/imports', 'Bulk\UserImportController@store')
                        ->name('bulk.imports.index');
                });

                Route::livewire('/', 'user-manager::user-manager.home')
                    ->layout('user-manager::layouts.livewire_content_template')
                    ->name('index');

                Route::livewire('/bulk', 'user-manager::user-manager.bulk.index')
                    ->layout('user-manager::layouts.livewire_content_template')
                    ->name('bulk.index');
            });
        });
});
