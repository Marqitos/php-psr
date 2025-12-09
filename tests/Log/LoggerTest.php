<?php
/**
 * This file is part of the Rodas\Psr library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/MIT MIT
 * @link https://marcospor.to/repositories/psr
 */

declare(strict_types=1);

namespace Psr\Test\Log;

use Psr\Log\InvalidArgumentException;
use Psr\Log\LogLevel;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/Logger.php';

/**
 * Test class for NullLogger
 *
 * @covers Psr\Log\AbstractLogger
 */
class LoggerTest extends TestCase {

    /**
     * Test function LoggerTrait::emergency
     *
     * @return void
     *
     * @covers LoggerTrait::emergency
     */
    public function testEmergency(): void {
        $logger = new Logger();
        $message = 'emergency message';
        $logger->emergency($message);
        $this->assertEquals(LogLevel::EMERGENCY, $logger->level);
        $this->assertEquals($message, $logger->message);
    }

    /**
     * Test function LoggerTrait::alert
     *
     * @return void
     *
     * @covers LoggerTrait::alert
     */
    public function testAlert(): void {
        $logger = new Logger();
        $message = 'alert message';
        $logger->alert($message);
        $this->assertEquals(LogLevel::ALERT, $logger->level);
        $this->assertEquals($message, $logger->message);
    }

    /**
     * Test function LoggerTrait::critical
     *
     * @return void
     *
     * @covers LoggerTrait::critical
     */
    public function testCritical(): void {
        $logger = new Logger();
        $message = 'critical message';
        $logger->critical($message);
        $this->assertEquals(LogLevel::CRITICAL, $logger->level);
        $this->assertEquals($message, $logger->message);
    }

    /**
     * Test function LoggerTrait::error
     *
     * @return void
     *
     * @covers LoggerTrait::error
     */
    public function testError(): void {
        $logger = new Logger();
        $message = 'error message';
        $logger->error($message);
        $this->assertEquals(LogLevel::ERROR, $logger->level);
        $this->assertEquals($message, $logger->message);
    }

    /**
     * Test function LoggerTrait::warning
     *
     * @return void
     *
     * @covers LoggerTrait::warning
     */
    public function testWarning(): void {
        $logger = new Logger();
        $message = 'warning message';
        $logger->warning($message);
        $this->assertEquals(LogLevel::WARNING, $logger->level);
        $this->assertEquals($message, $logger->message);
    }

    /**
     * Test function LoggerTrait::notice
     *
     * @return void
     *
     * @covers LoggerTrait::notice
     */
    public function testNotice(): void {
        $logger = new Logger();
        $message = 'notice message';
        $logger->notice($message);
        $this->assertEquals(LogLevel::NOTICE, $logger->level);
        $this->assertEquals($message, $logger->message);
    }

    /**
     * Test function LoggerTrait::info
     *
     * @return void
     *
     * @covers LoggerTrait::info
     */
    public function testInfo(): void {
        $logger = new Logger();
        $message = 'info message';
        $logger->info($message);
        $this->assertEquals(LogLevel::INFO, $logger->level);
        $this->assertEquals($message, $logger->message);
    }

    /**
     * Test function LoggerTrait::debug
     *
     * @return void
     *
     * @covers LoggerTrait::debug
     */
    public function testDebug(): void {
        $logger = new Logger();
        $message = 'debug message';
        $logger->debug($message);
        $this->assertEquals(LogLevel::DEBUG, $logger->level);
        $this->assertEquals($message, $logger->message);
    }
    
    /**
     * Test LoggerInterface::log()
     *
     * @covers LoggerInterface::log
     * @covers InvalidArgumentException
     *
     * @return void
     */
    public function testExceptionLog(): void {
        $this->expectException(InvalidArgumentException::class);
        $logger = new Logger();
        $logger->log('other', 'other message');
    }

}
