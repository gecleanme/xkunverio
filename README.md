# Unit Conversions made a breeze

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gecleanme/xkunverio.svg?style=flat-square)](https://packagist.org/packages/gecleanme/xkunverio)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/gecleanme/xkunverio/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/gecleanme/xkunverio/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/gecleanme/xkunverio/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/gecleanme/xkunverio/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gecleanme/xkunverio.svg?style=flat-square)](https://packagist.org/packages/gecleanme/xkunverio)

Zero-dependency, slim Laravel package to convert between different units with ease

## Installation

You can install the package via composer:

```bash
composer require gecleanme/xkunverio
```

## Usage

```php

// use the designated Conversion Type Class & its corresponding Enum following the naming pattern :
//"X{ConversionType}" & "X{ConversionType}Unit" for the Enum

use gecleanme\Xkunverio\Enums\XLengthUnit;
use gecleanme\Xkunverio\XLength;

// Invoke the 'convert' method with the "unit from", "unit to" and the measurement value then call
// get()

// Convert one Kilometer to Meters
XLength::convert(XLengthUnit::Kilometer, XLengthUnit::Meter, 1)
    ->get(); //1000.0
```

## Testing

```bash
composer test
```

## Supported Length Units

- Meter
- Kilometer
- Mile
- Yard
- Centimeter
- Inch
- Feet
- Millimeter


## Supported Area Units

- Square Inches 
- Square Feet 
- Square Yards 
- Square Miles 
- Square Millimeter
- Square Centimeter
- Square Meters
- Square Kilometers

## Supported Mass Units

- Kilograms 
- Ounces
- Pounds
- Stones
- Long Tonnes 
- Short Tonnes
- Milligrams 
- Grams
- Metric Tonnes

## Supported Speed Units

- Meters Per Second
- Kilometers Per Hour
- Miles Per Hour
- Knots

## Supported Temperature Units

- Celsius
- Fahrenheit
- Kelvin

## Supported Volume Units

- Cubic Inches
- Cubic Feet
- Cubic Centimeters
- Milliliters
- Cubic Meters
- Imperial Gallons
- Imperial Quarts
- Imperial Pints
- Imperial Cups
- Imperial Ounces
- Imperial Tablespoons
- Imperial Teaspoons
- Liters



## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Report them by [Emailing](mailto:promomegm@gmail.com) me

## Credits

- [Milad Khader](https://github.com/gecleanme)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
