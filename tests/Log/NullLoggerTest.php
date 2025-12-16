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

use PHPUnit\Framework\TestCase;
use Rodas\Psr\Log\LogLevel;
use Rodas\Psr\Log\NullLogger;

/**
 * Test class for NullLogger
 *
 * @covers Psr\Log\NullLogger
 */
class NullLoggerTest extends TestCase {

    protected NullLogger $logger;

    protected function setUp(): void {
        $this->logger = new NullLogger();
    }
    
    /**
     * Test function NullLogger::emergency
     *
     * @return void
     *
     * @covers LoggerInterface::emergency
     */
    public function testEmergency(): void {
        $this->logger->emergency('emergency message');
        $this->assertTrue(true);
    }

    /**
     * Test function NullLogger::alert
     *
     * @covers LoggerInterface::alert
     *
     * @return void
     */
    public function testAlert(): void {
        $this->logger->alert('alert message');
        $this->assertTrue(true);
    }

    /**
     * Test function NullLogger::critical
     *
     * @covers LoggerInterface::critical
     *
     * @return void
     */
    public function testCritical(): void {
        $this->logger->critical('critical message');
        $this->assertTrue(true);
    }

    /**
     * Test function NullLogger::error
     *
     * @covers LoggerInterface::error
     *
     * @return void
     */
    public function testError(): void {
        $this->logger->error('error message');
        $this->assertTrue(true);
    }

    /**
     * Test function NullLogger::warning
     *
     * @covers LoggerInterface::warning
     *
     * @return void
     */
    public function testWarning(): void {
        $this->logger->warning('warning message');
        $this->assertTrue(true);
    }

    /**
     * Test function NullLogger::notice
     *
     * @covers LoggerInterface::notice
     *
     * @return void
     */
    public function testNotice(): void {
        $this->logger->notice('notice message');
        $this->assertTrue(true);
    }

    /**
     * Test function NullLogger::info
     *
     * @covers LoggerInterface::info
     *
     * @return void
     */
    public function testInfo(): void {
        $this->logger->info('info message');
        $this->assertTrue(true);
    }

    /**
     * Test function NullLogger::debug
     *
     * @covers LoggerInterface::debug
     *
     * @return void
     */
    public function testDebug(): void {
        $this->logger->debug('debug message');
        $this->assertTrue(true);
    }

    /**
     * Test NullLogger::log()
     *
     * @covers NullLogger::log()
     *
     * @return void
     */
    public function testLog(): void {
        $this->logger->log(LogLevel::EMERGENCY, 'emergency message');
        $this->logger->log(LogLevel::ALERT, 'alert message');
        $this->logger->log(LogLevel::CRITICAL, 'critical message');
        $this->logger->log(LogLevel::ERROR, 'error message');
        $this->logger->log(LogLevel::WARNING, 'warning message');
        $this->logger->log(LogLevel::NOTICE, 'notice message');
        $this->logger->log(LogLevel::INFO, 'info message');
        $this->logger->log(LogLevel::DEBUG, 'debug message');
        $this->assertTrue(true);
    }
    
}
