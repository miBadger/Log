# miBadger.Log

[![Build Status](https://scrutinizer-ci.com/g/miBadger/miBadger.Log/badges/build.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Log/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/miBadger/miBadger.Log/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Log/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/miBadger/miBadger.Log/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Log/?branch=master)

The Log Component.

## PSR-3

This package implements the [PSR-3 logger interfaces](http://www.php-fig.org/psr/psr-3/) so you can easily swap this package with other PSR-3 compatible package. Check the [official PHP Framework Interop Group website](http://www.php-fig.org) for information about the [PSR recommendations](http://www.php-fig.org/psr/).

## Example

```php
<?php

use miBadger\Log\Logger;
use miBadger\Log\LogHandler;

/**
 * Create a new logger.
 */
$logger = new Logger();

/**
 * Create a new log handler.
 */
$logHandler = new LogHandler();

/**
 * Attach a log handler.
 */
$logger->attach($logHandler);

/**
 * Log an informational message.
 */
$logger->info('message');
```
