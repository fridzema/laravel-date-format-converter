# Converts date format from js to php and the other way around

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fridzema/laravel-date-format-converter.svg?style=flat-square)](https://packagist.org/packages/fridzema/laravel-date-format-converter)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fridzema/laravel-date-format-converter/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fridzema/laravel-date-format-converter/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fridzema/laravel-date-format-converter/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/fridzema/laravel-date-format-converter/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fridzema/laravel-date-format-converter.svg?style=flat-square)](https://packagist.org/packages/fridzema/laravel-date-format-converter)

Really simple package to convert js date format to php date format and the other way around.

```php
    use Fridzema\DateFormatConverter\DateFormatConverter;

    it('converts JavaScript date formats to PHP date formats', function () {
        expect(DateFormatConverter::convertJsFormatToPhp('YYYY-MM-DD'))->toEqual('Y-m-d');
    });

    it('converts PHP date formats to JavaScript date formats', function () {
        expect(DateFormatConverter::convertPhpFormatToJs('Y-m-d'))->toEqual('YYYY-MM-DD');
    });
```

## Installation

You can install the package via composer:

```bash
composer require fridzema/laravel-date-format-converter
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-date-format-converter-config"
```

## Usage

```php
$dateFormatConverter = new Fridzema\DateFormatConverter();

echo DateFormatConverter::convertPhpFormatToJs('Y-m-d');
echo DateFormatConverter::convertJsFormatToPhp('YYYY-MM-DD');
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

- [Robert Fridzema](https://github.com/fridzema)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
