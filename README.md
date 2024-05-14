# A Blackcart app for Strata

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astrogoat/blackcart.svg?style=flat-square)](https://packagist.org/packages/astrogoat/blackcart)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astrogoat/blackcart/run-tests?label=tests)](https://github.com/astrogoat/blackcart/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astrogoat/blackcart/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astrogoat/blackcart/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astrogoat/blackcart.svg?style=flat-square)](https://packagist.org/packages/astrogoat/blackcart)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require astrogoat/blackcart
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Astrogoat\Blackcart\BlackcartServiceProvider" --tag="blackcart-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Astrogoat\Blackcart\BlackcartServiceProvider" --tag="blackcart-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$blackcart = new Astrogoat\Blackcart();
echo $blackcart->echoPhrase('Hello, Astrogoat!');
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

- [Laura Tonning](https://github.com/tonning)
- [All Contributors](../../contributors)

This blackcart package is forked from the awesome [Spatie blackcart package](https://github.com/spatie/package-blackcart-laravel#support-us). Please go support them if you can.




## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
