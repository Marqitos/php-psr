<?php
/**
 * This file is part of the Rodas\Psr\Http\Message library
 *
 * Based on Http\Message\ServerRequestFactoryInterface.php
 * psr/http-factory (Psr\Http\Message) from PHP Framework Interoperability Group
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Rodas\Psr
 * @subpackage psr-http-factory
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/mit The MIT License
 * @link https://marcospor.to/repositories/psr
 */

declare(strict_types=1);

namespace Rodas\Psr\Http\Message;

require_once __DIR__ . '/RequestMethod.php';
require_once __DIR__ . '/ServerRequestInterface.php';

interface ServerRequestFactoryInterface {
    /**
     * Create a new server request.
     *
     * Note that server-params are taken precisely as given - no parsing/processing
     * of the given values is performed, and, in particular, no attempt is made to
     * determine the HTTP method or URI, which must be provided explicitly.
     *
     * @param RequestMethod|string $method The HTTP method associated with the request.
     * @param UriInterface|string $uri The URI associated with the request. If
     *     the value is a string, the factory MUST create a UriInterface
     *     instance based on it.
     * @param array $serverParams Array of SAPI parameters with which to seed
     *     the generated request instance.
     *
     * @return ServerRequestInterface
     */
    public function createServerRequest(RequestMethod|string $method, $uri, array $serverParams = []): ServerRequestInterface;
}
