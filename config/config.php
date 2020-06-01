<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'admin_prefix' => env('ADMIN_PREFIX', 'admin'),
    'app_shell_template' => env('APP_SHELL_TEMPLATE', 'user-manager::layouts.app_shell'),
    'livewire_content_template' => env('LIVEWIRE_CONTENT_TEMPLATE', 'user-manager::layouts.livewire_content_template'),
];
