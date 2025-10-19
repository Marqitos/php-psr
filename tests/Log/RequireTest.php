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

/**
 * Require test class for Psr\Log
 *
 * Verify that all Psr\Log 'require' statements work correctly
 */
class RequireTest extends TestCase {

    /**
     * Test AbstractLogger inheritance
     *
     * @return void
     *
     * @covers Psr\Log\AbstractLogger
     */
    public function testAbstractLogger(): void {
        // Not necesary loaded
        // AbstractLogger implements LoggerInterface
        $existsLoggerInterface = interface_exists('Psr\Log\LoggerInterface', false);
        // AbstractLogger use LoggerTrait
        $existsLoggerTrait = trait_exists('Psr\Log\LoggerTrait', false);
        // LoggerTrait depends LogLevel
        $existsLogLevel = class_exists('Psr\Log\LogLevel', false);
        $allLoad = $existsLoggerInterface &&
            $existsLoggerTrait &&
            $existsLogLevel;
        if (!$allLoad) {
            class_exists('Psr\Log\AbstractLogger');
            // All must be loaded
            // AbstractLogger implements LoggerInterface
            $existsLoggerInterface = interface_exists('Psr\Log\LoggerInterface', false);
            // AbstractLogger use LoggerTrait
            $existsLoggerTrait = trait_exists('Psr\Log\LoggerTrait', false);
            // LoggerTrait depends LogLevel
            $existsLogLevel = class_exists('Psr\Log\LogLevel', false);
            $allLoad = $existsLoggerInterface &&
                $existsLoggerTrait &&
                $existsLogLevel;
        }
        $this->assertTrue($allLoad);
    }

    /**
     * Test LoggerAwareInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Log\LoggerAwareInterface
     */
    public function testLoggerAwareInterface(): void {
        // Not necesary loaded
        // LoggerAwareInterface depends LoggerInterface
        $existsLoggerInterface = interface_exists('Psr\Log\LoggerInterface', false);
        if (!$existsLoggerInterface) {
            class_exists('Psr\Log\LoggerAwareInterface');
            // LoggerInterface must be loaded
            // LoggerAwareInterface depends LoggerInterface
            $existsLoggerInterface = interface_exists('Psr\Log\LoggerInterface', false);
        }
        $this->assertTrue($existsLoggerInterface);
    }

    /**
     * Test LoggerAwareTrait inheritance
     *
     * @return void
     *
     * @covers Psr\Log\LoggerAwareTrait
     */
    public function testLoggerAwareTrait(): void {
        // Not necesary loaded
        // LoggerAwareTrait depends LoggerInterface
        $existsLoggerInterface = interface_exists('Psr\Log\LoggerInterface', false);
        if (!$existsLoggerInterface) {
            class_exists('Psr\Log\LoggerAwareTrait');
            // LoggerInterface must be loaded
            // LoggerAwareTrait depends LoggerInterface
            $existsLoggerInterface = interface_exists('Psr\Log\LoggerInterface', false);
        }
        $this->assertTrue($existsLoggerInterface);
    }

    /**
     * Test LoggerTrait inheritance
     *
     * @return void
     *
     * @covers Psr\Log\LoggerTrait
     */
    public function testLoggerTrait(): void {
        // Not necesary loaded
        // LoggerTrait depends LogLevel
        $existsLogLevel = class_exists('Psr\Log\LogLevel', false);
        if (!$existsLogLevel) {
            class_exists('Psr\Log\LoggerTrait');
            // LogLevel must be loaded
            // LoggerTrait depends LogLevel
            $existsLogLevel = class_exists('Psr\Log\LogLevel', false);
        }
        $this->assertTrue($existsLogLevel);
    }

    /**
     * Test NullLogger inheritance
     *
     * @return void
     *
     * @covers Psr\Log\NullLogger
     */
    public function testNullLogger(): void {
        // Not necesary loaded
        // NullLogger extends AbstractLogger
        $existsAbstractLogger = class_exists('Psr\Log\AbstractLogger', false);
        // AbstractLogger implements LoggerInterface
        $existsLoggerInterface = interface_exists('Psr\Log\LoggerInterface', false);
        // AbstractLogger use LoggerTrait
        $existsLoggerTrait = trait_exists('Psr\Log\LoggerTrait', false);
        // LoggerTrait depends LogLevel
        $existsLogLevel = class_exists('Psr\Log\LogLevel', false);
        $allLoad = $existsAbstractLogger &&
            $existsLoggerInterface &&
            $existsLoggerTrait &&
            $existsLogLevel;
        if (!$allLoad) {
            class_exists('Psr\Log\NullLogger');
            // All must be loaded
            // NullLogger extends AbstractLogger
            $existsAbstractLogger = class_exists('Psr\Log\AbstractLogger', false);
            // AbstractLogger implements LoggerInterface
            $existsLoggerInterface = interface_exists('Psr\Log\LoggerInterface', false);
            // AbstractLogger use LoggerTrait
            $existsLoggerTrait = trait_exists('Psr\Log\LoggerTrait', false);
            // LoggerTrait depends LogLevel
            $existsLogLevel = class_exists('Psr\Log\LogLevel', false);
            $allLoad = $existsAbstractLogger &&
                $existsLoggerInterface &&
                $existsLoggerTrait &&
                $existsLogLevel;
        }
        $this->assertTrue($allLoad);
    }
    
}
