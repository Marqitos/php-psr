<?php
/**
 * This file is part of the Psr\Log library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2012 PHP Framework Interoperability Group
 * @license https://opensource.org/license/MIT MIT
 * @link https://www.php-fig.org/psr/psr-3
 */

declare(strict_types=1);

namespace Psr\Log;

use Stringable;

require_once __DIR__ . '/LogLevel.php';

/**
  * This is a simple Logger trait that classes unable to extend AbstractLogger
  * (because they extend another class, etc) can include.
  *
  * It simply delegates all log-level-specific methods to the `log` method to
  * reduce boilerplate code that a simple Logger that does the same thing with
  * messages regardless of the error level has to implement.
  */
trait LoggerTrait {
    /**
      * System is unusable.
      */
    public function emergency(string | Stringable $message, array $context = []): void {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }

    /**
      * Action must be taken immediately.
      *
      * Example: Entire website down, database unavailable, etc. This should
      * trigger the SMS alerts and wake you up.
      */
    public function alert(string | Stringable $message, array $context = []): void {
        $this->log(LogLevel::ALERT, $message, $context);
    }

    /**
      * Critical conditions.
      *
      * Example: Application component unavailable, unexpected exception.
      */
    public function critical(string | Stringable $message, array $context = []): void {
        $this->log(LogLevel::CRITICAL, $message, $context);
    }

    /**
      * Runtime errors that do not require immediate action but should typically
      * be logged and monitored.
      */
    public function error(string | Stringable $message, array $context = []): void {
        $this->log(LogLevel::ERROR, $message, $context);
    }

    /**
      * Exceptional occurrences that are not errors.
      *
      * Example: Use of deprecated APIs, poor use of an API, undesirable things
      * that are not necessarily wrong.
      */
    public function warning(string | Stringable $message, array $context = []): void {
        $this->log(LogLevel::WARNING, $message, $context);
    }

    /**
      * Normal but significant events.
      */
    public function notice(string | Stringable $message, array $context = []): void {
        $this->log(LogLevel::NOTICE, $message, $context);
    }

    /**
      * Interesting events.
      *
      * Example: User logs in, SQL logs.
      */
    public function info(string | Stringable $message, array $context = []): void {
        $this->log(LogLevel::INFO, $message, $context);
    }

    /**
      * Detailed debug information.
      */
    public function debug(string | Stringable $message, array $context = []): void {
        $this->log(LogLevel::DEBUG, $message, $context);
    }

    /**
      * Logs with an arbitrary level.
      *
      * @param string              $level   Log level, MUST be a LogLevel constant.
      * @param string|Stringable   $message Message to save in the log record.
      * @param array<string,mixed> $context Aditional log data.
      *
      * @throws InvalidArgumentException  If log level is not a valid LogLevel constant.
      */
    abstract public function log($level, string | Stringable $message, array $context = []): void;
}
