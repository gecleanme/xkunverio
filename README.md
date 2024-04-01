# Length Conversions made a breeze

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gecleanme/xkunverio.svg?style=flat-square)](https://packagist.org/packages/gecleanme/xkunverio)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/gecleanme/xkunverio/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/gecleanme/xkunverio/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/gecleanme/xkunverio/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/gecleanme/xkunverio/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gecleanme/xkunverio.svg?style=flat-square)](https://packagist.org/packages/gecleanme/xkunverio)

Zero-dependency, slim Laravel package to convert between different length/distance units with ease

## Installation

You can install the package via composer:

```bash
composer require gecleanme/xkunverio
```

## Usage
 
```php
use gecleanme\Xkunverio\Enums\xUnit;
use gecleanme\Xkunverio\XLength;

// Invoke the 'convert' method with the "unit from", "unit to" and the "length/distance"

// Convert one Kilometer to Meters

$conversion = XLength::convert(xUnit::Kilometer, xUnit::Meter, 1)->getResult(); //1000.0
```

## Testing

```bash
composer test
```

## Supported Units

- Meter
- Kilometer
- Mile
- Yard
- Centimeter
- Inch
- Feet
- Millimeter

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Report them by [Emailing](mailto:promomegm@gmail.com) me

## Credits

- [Milad Khader](https://github.com/gecleanme)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
