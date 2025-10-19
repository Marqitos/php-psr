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
# LoggerTrait members

    /**
      * Logs with an arbitrary level.
      *
      * @param mixed               $level   Log level, MUST be a LogLevel constant.
      * @param string|Stringable   $message Message to save in the log record.
      * @param array<string,mixed> $context Aditional log data.
      *
      * @return void                        Void return
      *
      * @throws InvalidArgumentException    If log level is not a valid LogLevel constant.
      */
    public function log(mixed $level, string | Stringable $message, array $context = []): void {
        // Noop.
    }

# -- LoggerTrait members
}
