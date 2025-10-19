<?php
/**
 * This file is part of the Psr\Http\Client library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2017 PHP Framework Interoperability Group
 * @license https://opensource.org/license/MIT MIT
 * @link https://www.php-fig.org/psr/psr-18
 */

declare(strict_types=1);

namespace Psr\Http\Client;

use Throwable;

/**
  * Every HTTP client related exception MUST implement this interface.
  */
interface ClientExceptionInterface extends Throwable { }
