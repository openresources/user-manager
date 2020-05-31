# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/openresources/user-manager.svg?style=flat-square)](https://packagist.org/packages/openresources/user-manager)
[![Build Status](https://img.shields.io/travis/openresources/user-manager/master.svg?style=flat-square)](https://travis-ci.org/openresources/user-manager)
[![Quality Score](https://img.shields.io/scrutinizer/g/openresources/user-manager.svg?style=flat-square)](https://scrutinizer-ci.com/g/openresources/user-manager)
[![Total Downloads](https://img.shields.io/packagist/dt/openresources/user-manager.svg?style=flat-square)](https://packagist.org/packages/openresources/user-manager)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require openresources/user-manager
```

## Post-install Tasks

### Publish package files

Publish the package files using the following

```bash
art vendor:publish --tag=user-manager:samples
```

```bash
art vendor:publish --tag=user-manager:assets
```

### Configure email queues

Email queues are necessary if you will be importing large numbers of users.

#### Setup a database queue driver

For a quick setup we'll document the setup using the database queue driver.. Feel free to use any of the others. See the [Laravel Documentation]("https://laravel.com/docs/7.x/queues#driver-prerequisites") for further instructions.

1. Create queue table for queued jobs and run migration.

    ```bash
    php artisan queue:table

    php artisan migrate
    ```

1. Update the QUEUE_CONNECTION setting in your project's .env file

    `QUEUE_CONNECTION=database`

1. If it isn't running already start the laravel queue worker

    `php artisan queue:work`

## Usage

``` php
// Usage description here
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email eviano@cleverpixels.net instead of using the issue tracker.

## Credits

- [Eviano Afiemo](https://github.com/openresources)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
