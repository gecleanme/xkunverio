# Length Conversions made a breeze

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gecleanme/xkunverio.svg?style=flat-square)](https://packagist.org/packages/gecleanme/xkunverio)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/gecleanme/xkunverio/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/gecleanme/xkunverio/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/gecleanme/xkunverio/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/gecleanme/xkunverio/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gecleanme/xkunverio.svg?style=flat-square)](https://packagist.org/packages/gecleanme/xkunverio)
This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require gecleanme/xkunverio
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="xkunverio-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="xkunverio-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="xkunverio-views"
```

## Usage
 
```php
$xkunverio = new gecleanme\Xkunverio();
echo $xkunverio->echoPhrase('Hello, gecleanme!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Milad Khader](https://github.com/gecleanme)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
