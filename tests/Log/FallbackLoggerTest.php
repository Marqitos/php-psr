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

namespace Rodas\Psr\Test\Log;

use Rodas\Psr\Log\FallbackLogger;
use Rodas\Psr\Log\LogLevel;
use Rodas\Psr\Log\NullLogger;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/FailLogger.php';
require_once __DIR__ . '/Logger.php';

class FallbackLoggerTest extends TestCase {

    public function testFallbackLogger(): void {
        $message = 'Test message';
        $fallbackLogger = new FallbackLogger();

        $logger1 = new Logger();
        $logger2 = new NullLogger();
        $logger3 = new FailLogger();

        $fallbackLogger->addLog($logger1);
        $fallbackLogger->addLog($logger2);
        $fallbackLogger->addLog($logger3);

        try {
            $fallbackLogger->log(LogLevel::ERROR, $message);
        } catch (\Exception $e) {
            // Exception should be caught inside FallbackLogger
            $this->fail('FallbackLogger should not throw exceptions from its loggers.');
        }

        // If we reach here, it means no exception was thrown
        $this->assertTrue(true);
        $this->assertEquals(LogLevel::ERROR, $logger1->level);
        $this->assertEquals($message, $logger1->message);
    }
}
