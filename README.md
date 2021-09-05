# Laravel eloquent uuid

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pierrebarbin/laravel-uuid.svg?style=flat-square)](https://packagist.org/packages/pierrebarbin/laravel-uuid)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/pierrebarbin/laravel-uuid/run-tests?label=tests)](https://github.com/pierrebarbin/laravel-uuid/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/pierrebarbin/laravel-uuid/Check%20&%20fix%20styling?label=code%20style)](https://github.com/pierrebarbin/laravel-uuid/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/pierrebarbin/laravel-uuid.svg?style=flat-square)](https://packagist.org/packages/pierrebarbin/laravel-uuid)

## Installation

[comment]: <> (You can install the package via composer:)

[comment]: <> (```bash)

[comment]: <> (composer require pierrebarbin/laravel-uuid)

[comment]: <> (```)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="PierreBarbin\Uuid\UuidServiceProvider" --tag="laravel-uuid-config"
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Pierre](https://github.com/pierrebarbin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
