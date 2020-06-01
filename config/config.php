<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'admin_prefix' => env('ADMIN_PREFIX', 'admin'),
    'app_scaffold_template' => env('APP_SCAFFOLD_TEMPLATE', 'user-manager::layouts.scaffold'),
    'app_shell_template' => env('APP_SHELL_TEMPLATE', 'user-manager::layouts.app_shell'),
];
