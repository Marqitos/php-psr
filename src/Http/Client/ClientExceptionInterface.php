<?php
/**
 * This file is part of the Rodas\Psr\Http\Client library
 *
 * Based on Http\Client\ClientExceptionInterface.php
 * Psr\Http\Client from PHP Framework Interoperability Group
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Rodas\Psr
 * @subpackage psr-http-client
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/mit The MIT License
 * @link https://marcospor.to/repositories/system
 */

declare(strict_types=1);

namespace Rodas\Psr\Http\Client;

use Throwable;

/**
  * Every HTTP client related exception MUST implement this interface.
  */
interface ClientExceptionInterface extends Throwable { }
