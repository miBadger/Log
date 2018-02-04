<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Log;

/**
 * The log record class.
 *
 * @see http://tools.ietf.org/html/rfc5424
 * @since 1.0.0
 */
class LogRecord
{
	/** @var string The log records level. */
	private $level;

	/** @var string The log record message. */
	private $message;

	/** @var mixed[] The log record context. */
	private $context;

	/**
	 * Construct a log record object with the given level, message & context.
	 *
	 * @param string $level
	 * @param string $message
	 * @param mixed[] $context = []
	 */
	public function __construct($level, $message, array $context = [])
	{
		$this->level = $level;
		$this->message = $message;
		$this->context = $context;
	}

	/**
	 * Returns the level.
	 *
	 * @return string the level.
	 */
	public function getLevel()
	{
		return $this->level;
	}

	/**
	 * Returns the message.
	 *
	 * @return string the message.
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
	 * Returns the context.
	 *
	 * @return mixed[] the context.
	 */
	public function getContext()
	{
		return $this->context;
	}
}
