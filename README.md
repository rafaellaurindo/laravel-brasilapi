# Laravel Brasil API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rafaellaurindo/laravel-brasilapi.svg?style=flat-square)](https://packagist.org/packages/rafaellaurindo/laravel-brasilapi)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rafaellaurindo/laravel-brasilapi/run-tests?label=tests)](https://github.com/rafaellaurindo/laravel-brasilapi/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/rafaellaurindo/laravel-brasilapi/Check%20&%20fix%20styling?label=code%20style)](https://github.com/rafaellaurindo/laravel-brasilapi/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rafaellaurindo/laravel-brasilapi.svg?style=flat-square)](https://packagist.org/packages/rafaellaurindo/laravel-brasilapi)

Provides a Laravel wrapper for [Brasil API](https://brasilapi.com.br/).

## Installation

You can install the package via composer:

```bash
composer require rafaellaurindo/laravel-brasilapi
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="RafaelLaurindo\BrasilApi\BrasilApiServiceProvider" --tag="config""
```

## Usage

### Searching for an address using CEP:

```php
$address = app(BrasilApi::class)->cep('01431000');

// Or Using helper
$address = brasilApi()->cep('01431000');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rafael Laurindo](https://github.com/rafaellaurindo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.