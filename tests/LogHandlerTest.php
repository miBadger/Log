<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 * @version 1.0.0
 */

namespace miBadger\Log;

use miBadger\File\File;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;
use org\bovigo\vfs\vfsStreamWrapper;
use PHPUnit\Framework\TestCase;
use Psr\Log\LogLevel;

/**
 * The log handler test.
 *
 * @since 1.0.0
 */
class LogHandlerTest extends TestCase
{
	/** @var LogHandler The log handler. */
	private $logHandler;

	/** @var string the log level. */
	private $logLevel;

	/** @var File The file. */
	private $file;

	public function setUp()
	{
		vfsStreamWrapper::register();
		vfsStreamWrapper::setRoot(new vfsStreamDirectory('test'));

		$this->logHandler = new LogHandler(vfsStream::url('test'));
		$this->logLevel = LogLevel::DEBUG;
		$this->file = new File(vfsStream::url('test' . \DIRECTORY_SEPARATOR . strtolower($this->logLevel) . LogHandler::DEFAULT_EXTENSION));
	}

	public function testUpdate()
	{
		// Create new log
		$this->logHandler->update(new Logger(), new LogRecord($this->logLevel, 'message'));

		// Split date time
		$result = explode(' - ', $this->file->read());

		// Assert
		$this->assertEquals('message' . PHP_EOL, $result[1]);
	}

	/**
	 * @expectedException miBadger\File\FileException
	 * @expectedExceptionMessage Can't read the content.
	 */
	public function testUpdateException()
	{
		$this->logHandler->update(new Logger());

		@$this->file->read();
	}
}
