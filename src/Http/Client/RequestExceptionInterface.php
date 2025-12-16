<?php
/**
 * This file is part of the Rodas\Psr\Http\Client library
 *
 * Based on Http\Client\RequestExceptionInterface.php
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

use Rodas\Psr\Http\Message\RequestInterface;

require_once __DIR__ . '/ClientExceptionInterface.php';
require_once __DIR__ . '/../Message/RequestInterface.php';

/**
 * Exception for when a request failed.
 *
 * Examples:
 *      - Request is invalid (e.g. method is missing)
 *      - Runtime request errors (e.g. the body stream is not seekable)
 */
interface RequestExceptionInterface extends ClientExceptionInterface {
    /**
     * Gets the request.
     *
     * The request object MAY be a different object from the one passed to ClientInterface::sendRequest()
     *
     * @var RequestInterface
     */
    public RequestInterface $request { get; }
}
