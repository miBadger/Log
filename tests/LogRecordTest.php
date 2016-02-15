<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 * @version 1.0.0
 */

namespace miBadger\Log;

use Psr\Log\LogLevel;

/**
 * The log records test class.
 *
 * @since 1.0.0
 */
class LogRecordTest extends \PHPUnit_Framework_TestCase
{
	private $logRecord;

	public function setUp()
	{
		$this->logRecord = new LogRecord(LogLevel::DEBUG, 'test', ['key' => 'value']);
	}

	public function testGetLevel()
	{
		$this->assertEquals(LogLevel::DEBUG, $this->logRecord->getLevel());
	}

	public function testGetMessage()
	{
		$this->assertEquals('test', $this->logRecord->getMessage());
	}

	public function testGetContext()
	{
		$this->assertEquals(['key' => 'value'], $this->logRecord->getContext());
	}
}
