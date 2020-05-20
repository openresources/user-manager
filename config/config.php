<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'admin_prefix' => env('ADMIN_PREFIX', 'admin'),
    'app_shell_template' => env('APP_SHELL_TEMPLATE', 'user-manager::layouts.app_shell'),
    'livewire_shell_template' => env('LIVEWIRE_SHELL_TEMPLATE', 'user-manager::layouts.livewire_shell_template'),
];
