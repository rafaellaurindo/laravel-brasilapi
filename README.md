# Laravel Brasil API 🇧🇷

[![Latest Stable Version](http://poser.pugx.org/rafaellaurindo/laravel-brasilapi/v)](https://packagist.org/packages/rafaellaurindo/laravel-brasilapi)
[![Tests](https://img.shields.io/github/actions/workflow/status/rafaellaurindo/laravel-brasilapi/run-tests.yml?label=tests)](https://github.com/rafaellaurindo/laravel-brasilapi/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Code Style](https://img.shields.io/github/actions/workflow/status/rafaellaurindo/laravel-brasilapi/php-cs-fixer.yml?label=code%20style)](https://github.com/rafaellaurindo/laravel-brasilapi/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![License](https://img.shields.io/github/license/rafaellaurindo/laravel-brasilapi)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/rafaellaurindo/laravel-brasilapi)](https://packagist.org/packages/rafaellaurindo/laravel-brasilapi)

**Laravel Brasil API** is a simple and elegant package to easily consume [Brasil API](https://brasilapi.com.br/) endpoints within your Laravel applications.

---

## 📑 Table of Contents

- [Installation](#-installation)
- [Usage](#-usage)
- [Examples](#-examples)
- [Running Tests](#-running-tests)
- [Changelog](#-changelog)
- [Contributing](#-contributing)
- [Security Vulnerabilities](#-security-vulnerabilities)
- [Credits](#-credits)
- [License](#-license)

---

## 📦 Installation

> **Requirements:**  
> This package supports **Laravel 8.0 and above**.

Install the package via Composer:

```bash
composer require rafaellaurindo/laravel-brasilapi
```

Optionally, you can publish the config file:

```bash
php artisan vendor:publish --provider="RafaelLaurindo\BrasilApi\BrasilApiServiceProvider" --tag="config"
```

---

## 🚀 Usage

You can access the package using **Dependency Injection**, **Facade**, or **Helper**.

### 1. Using Dependency Injection

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

### 2. Using Facade

```php
use BrasilApi;

BrasilApi::cep('01431000');
```

### 3. Using Helper

```php
brasilApi()->getBank(77);
```

---

## 📚 Examples

Make sure you import the Facade when using the examples:

```php
use BrasilApi;
```

### 🔎 Search address by zip code

```php
BrasilApi::cep('01431000');
```

### 🏦 List Brazilian banks

```php
BrasilApi::getBanks();
```

### 🏛️ Get a bank by its code

```php
BrasilApi::getBank(77);
```

### 🏢 Find company information by CNPJ

```php
BrasilApi::findCnpj('19131243000197');
```

---

## ✅ Running Tests

To run the package tests, simply execute:

```bash
composer test
```

---

## 📋 Changelog

Please refer to the [CHANGELOG](CHANGELOG.md) to learn about updates and changes.

---

## 🤝 Contributing

Feel free to read the [CONTRIBUTING](.github/CONTRIBUTING.md) guide if you want to contribute to this project.

---

## 🔐 Security Vulnerabilities

If you discover a security vulnerability, please review our [Security Policy](../../security/policy) for how to report it.

---

## 👨‍💻 Credits

- [Rafael Laurindo](https://github.com/rafaellaurindo)
- [All Contributors](../../contributors)

---

## 📄 License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).