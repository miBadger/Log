# Logger

The logger class.

## Example(s)

```php
<?php

use miBadger\Log\Logger;

/**
 * System is unusable.
 */
$logger->emergency($message, array $context = array());

/**
 * Action must be taken immediately.
 */
$logger->alert($message, array $context = array());

/**
 * Critical conditions.
 */
$logger->critical($message, array $context = array());

/**
 * Runtime errors that do not require immediate action but should typically
 * be logged and monitored.
 */
$logger->error($message, array $context = array());

/**
 * Exceptional occurrences that are not errors.
 */
$logger->warning($message, array $context = array());

/**
 * Normal but significant events.
 */
$logger->notice($message, array $context = array());

/**
 * Interesting events.
 */
$logger->info($message, array $context = array());

/**
 * Detailed debug information.
 */
$logger->debug($message, array $context = array());

/**
 * Logs with an arbitrary level.
 */
$logger->log($level, $message, array $context = array());
```
