# MyParcel API client for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![StyleCI][ico-style-ci]][link-style-ci]
[![Total Downloads][ico-downloads]][link-downloads]

This package incorporates the [MyParcel API client](https://github.com/mvdnbrk/myparcel-php-api) into your laravel project.

## Installation

You can install the package via composer:

```bash
composer require mvdnbrk/laravel-myparcel
```

## Configuration

All you need to do is add your MyParcel API key to the `.env` file:

```
MYPARCEL_API_KEY=YOUR-API-KEY
```

## Usage

```php
use Mvdnbrk\Laravel\Facades\MyParcel;

$shipment = MyParcel::shipments()->create([
   ...
]);
```

* [Full documentation for the MyParcel API client](https://github.com/mvdnbrk/myparcel-php-api)

### Global helper method

For your convenience this package provides a global `myparcel()` helper function.

```php
myparcel()->shipments()->create([
   ...
]);
```

## Testing

``` bash
composer test
```
## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email mvdnbrk@gmail.com instead of using the issue tracker.

## Credits

- [Mark van den Broek][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mvdnbrk/laravel-myparcel.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mvdnbrk/laravel-myparcel/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/mvdnbrk/laravel-myparcel.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/mvdnbrk/laravel-myparcel.svg?style=flat-square
[ico-style-ci]: https://styleci.io/repos/221930206/shield?branch=master
[ico-downloads]: https://img.shields.io/packagist/dt/mvdnbrk/laravel-myparcel.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/mvdnbrk/laravel-myparcel
[link-travis]: https://travis-ci.org/mvdnbrk/laravel-myparcel
[link-scrutinizer]: https://scrutinizer-ci.com/g/mvdnbrk/laravel-myparcel/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/mvdnbrk/laravel-myparcel
[link-style-ci]: https://styleci.io/repos/221930206
[link-downloads]: https://packagist.org/packages/mvdnbrk/laravel-myparcel
[link-author]: https://github.com/mvdnbrk
[link-contributors]: ../../contributors
