<?php
/**
 * This file is part of the Rodas\Psr library
 *
 * Based on Log\LoggerInterface.php
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

require_once __DIR__ . '/LogLevel.php';

/**
  * Describes a logger instance.
  *
  * The message MUST be a string or object implementing __toString().
  *
  * The message MAY contain placeholders in the form: {foo} where foo
  * will be replaced by the context data in key "foo".
  *
  * The context array can contain arbitrary data. The only assumption that
  * can be made by implementors is that if an Exception instance is given
  * to produce a stack trace, it MUST be in a key named "exception".
  *
  * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
  * for the full interface specification.
  */
interface LoggerInterface {
    /**
     * System is unusable.
     *
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     */
    public function emergency(string | Stringable $message, array $context = []): void;

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     */
    public function alert(string | Stringable $message, array $context = []): void;

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     */
    public function critical(string | Stringable $message, array $context = []): void;

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     */
    public function error(string | Stringable $message, array $context = []): void;

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     */
    public function warning(string | Stringable $message, array $context = []): void;

    /**
     * Normal but significant events.
     *
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     */
    public function notice(string | Stringable $message, array $context = []): void;

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     */
    public function info(string | Stringable $message, array $context = []): void;

    /**
     * Detailed debug information.
     *
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     */
    public function debug(string | Stringable $message, array $context = []): void;

    /**
     * Logs with an arbitrary level.
     *
     * @param LogLevel            $level   Log level.
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     */
    public function log(LogLevel $level, string | Stringable $message, array $context = []): void;
}
