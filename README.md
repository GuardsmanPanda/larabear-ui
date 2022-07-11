# Larabear UI

[![Latest Version on Packagist](https://img.shields.io/packagist/v/guardsmanpanda/larabear-ui.svg?style=flat-square)](https://packagist.org/packages/guardsmanpanda/larabear-ui)
[![Total Downloads](https://img.shields.io/packagist/dt/guardsmanpanda/larabear-ui.svg?style=flat-square)](https://packagist.org/packages/guardsmanpanda/larabear-ui)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require guardsmanpanda/larabear-ui dev-main
```

## Usage
Add the Service provider to config/app.php:
```php
    'providers' => [
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        ...
        GuardsmanPanda\LarabearUi\Infrastructure\Laravel\Provider\BearUiServiceProvider::class,
    ],
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
