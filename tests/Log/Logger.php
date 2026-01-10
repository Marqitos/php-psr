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
 * A logger that save the last log into public variables
 */
class Logger extends AbstractLogger {

    public LogLevel $level;
    public string $message;

# LoggerTrait members

    /**
     * Logs with an arbitrary level.
     *
     * @param LogLevel            $level   Log level.
     * @param string|Stringable   $message Message to save in the log record.
     * @param array<string,mixed> $context Additional log data.
     * @return void                        Void return
     */
    public function log(LogLevel $level, string | Stringable $message, array $context = []): void {
        $this->level = $level;
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
            if (! is_array($val)
                && (! is_object($val)
                    || method_exists($val, '__toString'))) {

                $replace['{' . $key . '}'] = $val;
            }
        }

        // interpolate replacement values into the message and return
        return strtr($message, $replace);
    }

}
