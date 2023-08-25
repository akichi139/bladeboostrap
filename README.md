# This is my package bladeboostrap

[![Latest Version on Packagist](https://img.shields.io/packagist/v/akichi139/bladeboostrap.svg?style=flat-square)](https://packagist.org/packages/akichi139/bladeboostrap)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/akichi139/bladeboostrap/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/akichi139/bladeboostrap/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/akichi139/bladeboostrap/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/akichi139/bladeboostrap/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/akichi139/bladeboostrap.svg?style=flat-square)](https://packagist.org/packages/akichi139/bladeboostrap)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/bladeboostrap.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/bladeboostrap)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require akichi139/bladeboostrap
```

You can publish and run the view with:

```bash
php artisan vendor:publish --tag="bladeboostrap-views"
```

## Usage

#table

```
<x-bladeboostrap::table>
    <x-slot name="header">
        <th>Name</th>
        <th>Department</th>
        <th>Email</th>
    </x-slot>
    <tr>
        <td>Alfred Rowe</td>
        <td>Outsourcing</td>
        <td>alfred@therowe.com</td>
    </tr>
    <tr>
        <td>Michael K. Ocansey</td>
        <td>Tech</td>
        <td>kabutey@gmail.com</td>
    </tr>
</x-bladeboostrap::table>
```

#input

```
//normal input
<x-bladeboostrap::input placeholder="string you want to show" required="true"/>
//password input
<x-bladeboostrap::input type="password" placeholder="password"/>
//color input
<x-bladeboostrap::input type="color"/>
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

- [akichi139](https://github.com/akichi139)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
