<?php
/**
 * This file is part of the Rodas\Psr library
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

use Rodas\Psr\Log\AbstractLogger;
use Rodas\Psr\Log\LogLevel;
use Stringable;
use Throwable;

/**
 * Distribute logging capacity among multiple loggers
 */
class FallbackLogger extends AbstractLogger {
    protected $loggers = [];
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
        foreach ($this->loggers as $logger) {
            try {
                $logger->log($level, $message, $context);
            } catch (Throwable $ex) { }
        }
    }

# -- LoggerInterface members

    /**
     * Add a new logger
     *
     * @param  LoggerInterface $logger
     * @return void
     */
    public function addLog(LoggerInterface $logger) {
        $this->loggers[] = $logger;
    }
}
