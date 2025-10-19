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

require_once __DIR__ . '/LoggerInterface.php';
require_once __DIR__ . '/LoggerTrait.php';

/**
  * This is a simple Logger implementation that other Loggers can inherit from.
  *
  * It simply delegates all log-level-specific methods to the `log` method to
  * reduce boilerplate code that a simple Logger that does the same thing with
  * messages regardless of the error level has to implement.
  */
abstract class AbstractLogger implements LoggerInterface {
    use LoggerTrait;
}
