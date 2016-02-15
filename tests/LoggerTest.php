<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 * @version 1.0.0
 */

namespace miBadger\Log;

use miBadger\Observer\SubjectInterface;
use Psr\Log\LogLevel;

/**
 * The logger test class.
 *
 * @since 1.0.0
 */
class LoggerTest extends \PHPUnit_Framework_TestCase
{
	/** @var Logger The logger. */
	private $logger;

	/** @var string the log level. */
	public static $logLevel;

	/** @var string the log message. */
	public static $logMessage;

	public function setUp()
	{
		$this->logger = new Logger();
		$this->logger->attach(new LogHandlerMockTest());
	}

	public function testLog()
	{
		$this->assertNull($this->logger->log(LogLevel::DEBUG, 'debug'));
		$this->assertEquals(LogLevel::DEBUG, static::$logLevel);
		$this->assertEquals('debug', static::$logMessage);
	}

	/**
	 * @depends testLog
	 */
	public function testEmergency()
	{
		$this->assertNull($this->logger->emergency('emergency'));
		$this->assertEquals(LogLevel::EMERGENCY, static::$logLevel);
		$this->assertEquals('emergency', static::$logMessage);
	}

	/**
	 * @depends testLog
	 */
	public function testAlert()
	{
		$this->assertNull($this->logger->alert('alert'));
		$this->assertEquals(LogLevel::ALERT, static::$logLevel);
		$this->assertEquals('alert', static::$logMessage);
	}

	/**
	 * @depends testLog
	 */
	public function testCritical()
	{
		$this->assertNull($this->logger->critical('critical'));
		$this->assertEquals(LogLevel::CRITICAL, static::$logLevel);
		$this->assertEquals('critical', static::$logMessage);
	}

	/**
	 * @depends testLog
	 */
	public function testError()
	{
		$this->assertNull($this->logger->error('error'));
		$this->assertEquals(LogLevel::ERROR, static::$logLevel);
		$this->assertEquals('error', static::$logMessage);
	}

	/**
	 * @depends testLog
	 */
	public function testWarning()
	{
		$this->assertNull($this->logger->warning('warning'));
		$this->assertEquals(LogLevel::WARNING, static::$logLevel);
		$this->assertEquals('warning', static::$logMessage);
	}

	/**
	 * @depends testLog
	 */
	public function testNotice()
	{
		$this->assertNull($this->logger->notice('notice'));
		$this->assertEquals(LogLevel::NOTICE, static::$logLevel);
		$this->assertEquals('notice', static::$logMessage);
	}

	/**
	 * @depends testLog
	 */
	public function testInfo()
	{
		$this->assertNull($this->logger->info('info'));
		$this->assertEquals(LogLevel::INFO, static::$logLevel);
		$this->assertEquals('info', static::$logMessage);
	}

	/**
	 * @depends testLog
	 */
	public function testDebug()
	{
		$this->assertNull($this->logger->debug('debug'));
		$this->assertEquals(LogLevel::DEBUG, static::$logLevel);
		$this->assertEquals('debug', static::$logMessage);
	}
}

class LogHandlerMockTest implements LogHandlerInterface
{
	public function update(SubjectInterface $subject, $arguments = null)
	{
		LoggerTest::$logLevel = $arguments->getLevel();
		LoggerTest::$logMessage = $arguments->getMessage();
	}
}
