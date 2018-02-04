<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Log;

use miBadger\Observer\SubjectInterface;
use miBadger\File\File;

/**
 * The log handler class.
 *
 * @see http://tools.ietf.org/html/rfc5424
 * @since 1.0.0
 */
class LogHandler implements LogHandlerInterface
{
	const DEFAULT_PATH = '.logger';
	const DEFAULT_EXTENSION = '.log';

	/** @var string The path. */
	private $path;

	/**
	 * Construct a log handler object with the given path.
	 *
	 * @param string $path = self::DEFAULT_PATH
	 */
	public function __construct($path = self::DEFAULT_PATH)
	{
		$this->path = $path;
	}

	/**
	 * {@inheritdoc}
	 */
	public function update(SubjectInterface $subject, $arguments = null)
	{
		// Check instance
		if (!$arguments instanceof LogRecord) {
			return;
		}

		// Create file
		$file = new File($this->path . DIRECTORY_SEPARATOR . strtolower($arguments->getLevel()) . static::DEFAULT_EXTENSION);

		// Append message
		$file->append((new \DateTime())->format('Y-m-d H:i:s') . ' - ' . $arguments->getMessage() . PHP_EOL);
	}
}
