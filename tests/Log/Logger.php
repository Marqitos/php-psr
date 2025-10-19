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

use Psr\Log\AbstractLogger;
use Psr\Log\InvalidArgumentException;
use Psr\Log\LogLevel;
use Stringable;

class Logger extends AbstractLogger {

    public string $level;
    public string $message;

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
        // Validate log level
        switch ($level) {
            case LogLevel::EMERGENCY:
            case LogLevel::ALERT:
            case LogLevel::CRITICAL:
            case LogLevel::ERROR:
            case LogLevel::WARNING:
            case LogLevel::NOTICE:
            case LogLevel::INFO:
            case LogLevel::DEBUG:
                $this->level = $level;
                break;
            default:
                throw new InvalidArgumentException('Invalid log level');
        }

        $this->level = (string) $level;
        $this->message = self::interpolate((string) $message, $context);
    }

# -- LoggerTrait members

    /**
     * Interpolates context values into the message placeholders.
     */
    private static function interpolate(string $message, array $context = []) {
        // build a replacement array with braces around the context keys
        $replace = [];
        foreach ($context as $key => $val) {
            // check that the value can be cast to string
            if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) {
                $replace['{' . $key . '}'] = $val;
            }
        }

        // interpolate replacement values into the message and return
        return strtr($message, $replace);
    }

}
