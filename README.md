![Publicise](https://user-images.githubusercontent.com/9021386/125131576-a4296c00-e10b-11eb-88ac-e367c7987eed.png)
# Publicise

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kodeas/publicise.svg?style=flat-square)](https://packagist.org/packages/kodeas/publicise)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kodeas/publicise/run-tests?label=tests)](https://github.com/kodeas/publicise/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/kodeas/publicise/Check%20&%20fix%20styling?label=code%20style)](https://github.com/kodeas/publicise/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/kodeas/publicise.svg?style=flat-square)](https://packagist.org/packages/kodeas/publicise)

---

Publicise lets you test the `private` or `protected` properties and methods in your classes. 
Behind the scenes, it utilises PHP's ReflectionClass and offers a more readable api.

It is particularly useful for testing Fluent Interfaces.

## Installation

You can install the package via composer:

```bash
composer require kodeas/publicise
```

## Usage

First, in your Test file or TestCase class, import the trait.
```php
use Kodeas\Publicise\WithPublicise;
use PHPUnit\Framework\TestCase;

class PubliciseTest extends TestCase
{
    use WithPublicise;
}
```

Then, you can reflect any class using `$this->publicise()`

```php
$publicisedClass = $this->publicise(new YourClass());

$publicisedClass->privateMethod();
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

- [kodeas](https://github.com/Kodeas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
