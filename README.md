# Laravel Brasil API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rafaellaurindo/laravel-brasilapi.svg?style=flat-square)](https://packagist.org/packages/rafaellaurindo/laravel-brasilapi)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rafaellaurindo/laravel-brasilapi/run-tests?label=tests)](https://github.com/rafaellaurindo/laravel-brasilapi/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/rafaellaurindo/laravel-brasilapi/Check%20&%20fix%20styling?label=code%20style)](https://github.com/rafaellaurindo/laravel-brasilapi/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rafaellaurindo/laravel-brasilapi.svg?style=flat-square)](https://packagist.org/packages/rafaellaurindo/laravel-brasilapi)

A Laravel package that provides a simple way to use the [Brasil API](https://brasilapi.com.br/) endpoints.

## Installation

You can install the package via composer:

```bash
composer require rafaellaurindo/laravel-brasilapi
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="RafaelLaurindo\BrasilApi\BrasilApiServiceProvider" --tag="config"
```

## Usage

You can use the methods from `Dependency Injection`, `Facade` or `helper`.

Using from Dependency Injection:

```php
use RafaelLaurindo\BrasilApi\BrasilApi;

class ExampleController
{
    public function searchZipCode(BrasilApi $brasilApi)
    {
        return response()->json($brasilApi->cep('01431000'));
    }
}
```

Using from Facade:

```php
use BrasilApi;

BrasilApi::cep('01431000');
```

Using from helper:

```php
brasilApi()->getBank(77);
```

After you've installed the package. All the following examples use the facade. Don't forget to import it at the top of your file.

```php
use BrasilApi;
```

### Searching address by zip code:

```php
BrasilApi::cep('01431000');
```

### Get brazilian banks list:

```php
BrasilApi::getBanks();
```

### Get a bank from code:

```php
BrasilApi::getBank(77);
```

### Find company information using the CNPJ:

```php
BrasilApi::findCnpj('19131243000197');
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
