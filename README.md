# A plugin to help you implement the Cloudflare Turnstile into your Filament panels.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/afatmustafa/filamentv3-turnstile.svg?style=flat-square)](https://packagist.org/packages/afatmustafa/filamentv3-turnstile)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/afatmustafa/filamentv3-turnstile/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/afatmustafa/filamentv3-turnstile/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/afatmustafa/filamentv3-turnstile/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/afatmustafa/filamentv3-turnstile/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/afatmustafa/filamentv3-turnstile.svg?style=flat-square)](https://packagist.org/packages/afatmustafa/filamentv3-turnstile)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require afatmustafa/filamentv3-turnstile
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filamentv3-turnstile-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filamentv3-turnstile-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filamentv3-turnstile-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentTurnstile = new Afatmustafa\FilamentTurnstile();
echo $filamentTurnstile->echoPhrase('Hello, Afatmustafa!');
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

- [Mustafa Afat](https://github.com/afatmustafa)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
