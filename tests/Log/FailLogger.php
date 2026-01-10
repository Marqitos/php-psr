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

use Rodas\Psr\Log\AbstractLogger;
use Rodas\Psr\Log\LogLevel;
use Stringable;

/**
 * A Logger that always fails
 */
class FailLogger extends AbstractLogger {
# LoggerTrait members

    /**
     * Logs with an arbitrary level.
     *
     * @param LogLevel            $level   Log level.
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     * @return void                        Void return
     */
    public function log(LogLevel $level, string|Stringable $message, array $context = []): void {
        throw new Exception("Error Processing Request", 1);
    }

# -- LoggerTrait members
}
