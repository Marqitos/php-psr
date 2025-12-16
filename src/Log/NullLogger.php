<?php
/**
 * This file is part of the Rodas\Psr library
 *
 * Based on Log\NullLogger.php
 * Psr\Log from PHP Framework Interoperability Group
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Rodas\Psr
 * @subpackage psr-log
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/mit The MIT License
 * @link https://marcospor.to/repositories/system
 */

declare(strict_types=1);

namespace Rodas\Psr\Log;

use Stringable;

require_once __DIR__ . '/AbstractLogger.php';

/**
 * This Logger can be used to avoid conditional log calls.
 *
 * Logging should always be optional, and if no logger is provided to your
 * library creating a NullLogger instance to have something to throw logs at
 * is a good way to avoid littering your code with `if ($this->logger) { }`
 * blocks.
 */
class NullLogger extends AbstractLogger {
# LoggerInterface members

    /**
     * Logs with an arbitrary level.
     *
     * @param LogLevel            $level   Log level.
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     *
     * @return void                        Void return
     */
    public function log(LogLevel $level, string | Stringable $message, array $context = []): void {
        // Noop.
    }

# -- LoggerInterface members
}
