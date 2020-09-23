<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'admin_prefix' => env('ADMIN_PREFIX', 'admin'),
    'app_scaffold_template' => env('APP_SCAFFOLD_TEMPLATE', 'user-manager::layouts.scaffold'),
    'app_shell_template' => env('APP_SHELL_TEMPLATE', 'user-manager::layouts.app_shell'),
    'bulk' => [
        'imports' => [
            'email_field' => env('BULK_EMAIL_IMPORT_FIELD', 'Email'),
            'password_field' => env('BULK_PASSWORD_IMPORT_FIELD', 'Password')
        ]
    ]
];
