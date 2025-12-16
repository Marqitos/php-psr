<?php
/**
 * This file is part of the Rodas\Psr library
 *
 * Based on Log\LogLevel.php
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

use function strtolower;

/**
 * Describes log levels.
 */
enum LogLevel: string {
    /**
     * System is unusable.
     */
    case EMERGENCY = 'emergency';
    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     */
    case ALERT     = 'alert';
    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     */
    case CRITICAL  = 'critical';
    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     */
    case ERROR     = 'error';
    /**
     * Exceptional occurrences that are not errors.
     */
    case WARNING   = 'warning';
    /**
     * Normal but significant events.
     */
    case NOTICE    = 'notice';
    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     */
    case INFO      = 'info';
    /**
     * Detailed debug information.
     */
    case DEBUG     = 'debug';

    /**
     * Returns a LogLevel case from a string
     *
     * @param  string   $level The log level to parse
     * @return LogLevel        The LogLevel case
     *
     * @throws ValueError      If not associated LogLevel found
     */
    public static function parse(string $level): LogLevel {
        return self::from(strtolower($level));
    }

    /**
     * Try returns a LogLevel case from a string
     *
     * @param  string   $level The log level to parse
     * @return LogLevel|null   The LogLevel case, or null if not found
     */
    public static function tryParse(string $level): ?LogLevel {
        return self::tryFrom(strtolower($level));
    }

}
