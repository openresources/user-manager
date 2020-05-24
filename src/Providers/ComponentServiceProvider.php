<?php

namespace Openresources\UserManager\Providers;

use Openresources\UserManager\Http\Livewire\UserManager\Home;
use Openresources\UserManager\Http\Livewire\UserManager\Bulk\Index;
use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // comment
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Livewire::component('user-manager::user-manager.home', Home::class);
        Livewire::component('user-manager::user-manager.bulk.index', Index::class);
    }
}
