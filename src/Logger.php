<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Log;

use miBadger\Observer\SubjectInterface;
use miBadger\Observer\SubjectTrait;
use Psr\Log\AbstractLogger;

/**
 * The logger implementation of the PSR-3 logger interface.
 *
 * @see http://www.php-fig.org/psr/psr-3/
 * @see http://tools.ietf.org/html/rfc5424
 * @since 3.0.0
 */
class Logger extends AbstractLogger implements SubjectInterface
{
	use SubjectTrait;

	/**
	 * Construct a logger object.
	 */
	public function __construct()
	{

	}

	/**
	 * {@inheritdoc}
	 */
	public function log($level, $message, array $context = [])
	{
		$this->notify(new LogRecord($level, $message, $context));
	}
}
