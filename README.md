# Laravel 5 Service Repository Pattern Generator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.



## Installation and Usage
### Step 1: Install through composer
```
composer require samjbro/srp-generator @dev
```
###Step 2: Add the Service Provider in `app/Providers/AppServiceProvider.php`
``` php
public function register()
{
    if ($this->app->environment() == 'local') {
    $this->app->register('samjbro\SRPGenerator\SRPGeneratorServiceProvider');
    }
}
```

``` php
php artisan make:srp ModelName
```
## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing
(upcoming)
``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email sjbroughton1@gmail.com instead of using the issue tracker.

## Credits

- [Sam Broughton][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/samjbro/Laravel-5-SRPGenerator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/samjbro/Laravel-5-SRPGenerator/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/samjbro/Laravel-5-SRPGenerator.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/samjbro/Laravel-5-SRPGenerator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/samjbro/Laravel-5-SRPGenerator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/samjbro/Laravel-5-SRPGenerator
[link-travis]: https://travis-ci.org/samjbro/Laravel-5-SRPGenerator
[link-scrutinizer]: https://scrutinizer-ci.com/g/samjbro/Laravel-5-SRPGenerator/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/samjbro/Laravel-5-SRPGenerator
[link-downloads]: https://packagist.org/packages/samjbro/Laravel-5-SRPGenerator
[link-author]: https://github.com/samjbro
[link-contributors]: ../../contributors
