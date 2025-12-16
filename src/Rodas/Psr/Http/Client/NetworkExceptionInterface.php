<?php
/**
 * This file is part of the Rodas\Psr\Http\Client library
 *
 * Based on Http\Client\NetworkExceptionInterface.php
 * Psr\Http\Client from PHP Framework Interoperability Group
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Rodas\Psr
 * @subpackage psr-http-client
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/mit The MIT License
 * @link https://marcospor.to/repositories/psr
 */

declare(strict_types=1);

namespace Rodas\Psr\Http\Client;

use Rodas\Psr\Http\Message\RequestInterface;

require_once __DIR__ . '/ClientExceptionInterface.php';
require_once __DIR__ . '/../Message/RequestInterface.php';

/**
 * Thrown when the request cannot be completed because of network issues.
 *
 * There is no response object as this exception is thrown when no response has been received.
 *
 * Example: the target host name can not be resolved or the connection failed.
 */
interface NetworkExceptionInterface extends ClientExceptionInterface {
    /**
     * Gets the request.
     *
     * The request object MAY be a different object from the one passed to ClientInterface::sendRequest()
     *
     * @var RequestInterface
     */
    public RequestInterface $request { get; }
}
