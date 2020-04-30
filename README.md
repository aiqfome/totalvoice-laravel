# TotalVoice Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aiqfome/totalvoice-laravel.svg?style=flat-square)](https://packagist.org/packages/aiqfome/totalvoice-laravel)
[![Build Status](https://img.shields.io/github/workflow/status/aiqfome/totalvoice-laravel/tests?label=tests)](https://github.com/aiqfome/:totalvoice-laravel/actions?query=workflow%3Atests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/aiqfome/totalvoice-laravel.svg?style=flat-square)](https://packagist.org/packages/aiqfome/totalvoice-laravel)

[Total Voice SDK](https://github.com/totalvoice/totalvoice-php) wrapper for Laravel/Lumen.

## Installation

You can install the package via composer:

```bash
composer require aiqfome/totalvoice-laravel
```

Publish the config:

```bash
php artisan vendor:publish
```

Insert your TotalVoice API token in the config file `config/totalvoice.php`:

```php
<?php

return [
    ...
    'token' => 'YOUR_TOKEN_HERE',
    ...
];
```

Or in your env file `.env`:

```env
...
TOTAL_VOICE_API_TOKEN="YOUR_TOKEN_HERE"
...
```

## Usage

Check the [Total Voice SDK](https://github.com/totalvoice/totalvoice-php) documentation.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email gian_bine@hotmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
