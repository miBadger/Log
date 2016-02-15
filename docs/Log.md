# Log

The logger class is used to simplify logging. It implements the PSR-3 logger interface so you can easily pick an other logging class if you'd like to.

## Example(s)

```php
// Create a new log handler.
$logHandler = new LogHandler()

// Create a new logger.
$logger = new Logger();

// Attach a log handler.
$logger->attach($logHandler);

// Log an informational message.
$logger->info('message');
```
