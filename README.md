# WIP
This project is a WIP and not currently functional.


# PagerDuty v2 Events API Wrapper Class

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lukewaite/pagerduty.svg?style=flat-square)](https://packagist.org/packages/lukewaite/pagerduty)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/lukewaite/pagerduty/master.svg?style=flat-square)](https://travis-ci.org/lukewaite/pagerduty)
[![StyleCI](https://styleci.io/repos/91087655/shield)](https://styleci.io/repos/91087655)
[![Quality Score](https://img.shields.io/scrutinizer/g/lukewaite/pagerduty.svg?style=flat-square)](https://scrutinizer-ci.com/g/lukewaite/pagerduty)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/lukewaite/pagerduty/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/lukewaite/pagerduty/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/lukewaite/pagerduty.svg?style=flat-square)](https://packagist.org/packages/lukewaite/pagerduty)

This package makes it easy to send notification events to [PagerDuty](https://www.pagerduty.com)'s [v2 Events API][link-pagerduty-v2-api].

## Contents

- [Installation](#installation)
	- [Setting up the PagerDuty service](#setting-up-the-PagerDuty-service)
- [Usage](#usage)
    - [PagerDuty Setup](#pagerduty-setup)
	- [Available methods](#available-methods)
- [Changelog](#changelog)
- [Testing](#testing)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)


## Installation

You can install the package via composer:

```bash
composer require lukewaite/pagerduty
```

## Usage

TODO: Implement usage documentation

### PagerDuty Setup
On a PagerDuty Service of your choice, create a new Integration using the [`Events API v2`][link-pagerduty-v2-api].

![Creating a new integration](doc/CreateNewIntegration.png)

The `Integration Key` listed for your new integration is what you need to set in the `setRoutingKey()` method.

![List of Integrations with Keys](doc/ListIntegrations.png)

### Available methods

TODO: Update available methods documentation.

See the [PagerDuty v2 Events API documentation][[link-pagerduty-v2-api]]
for more information about what these options will do.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email lwaite@gmail.com instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Luke Waite](https://github.com/lukewaite)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-pagerduty-v2-api]: https://v2.developer.pagerduty.com/docs/send-an-event-events-api-v2
