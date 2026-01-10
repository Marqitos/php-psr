<?php
/**
 * This file is part of the Rodas\Psr\Http\Message library
 *
 * Based on Http\Message\RequestMethodInterface.php
 * fig/http-message-util (Psr\Http\Message) from PHP Framework Interoperability Group
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Rodas\Psr
 * @subpackage psr-http-message
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/mit The MIT License
 * @link https://marcospor.to/repositories/psr
 */

declare(strict_types=1);

namespace Rodas\Psr\Http\Message;

use function strtoupper;

/**
 * Defines cases for common HTTP request methods.
 *
 * @link https://datatracker.ietf.org/doc/html/rfc7231#section-4.3
 */
enum RequestMethod: string {
    /**
     * The HEAD method asks for a response identical to a GET request, but without a response body.
     */
    case HEAD    = 'HEAD';
    /**
     * The GET method requests a representation of the specified resource.
     * Requests using GET should only retrieve data and should not contain a request content.
     */
    case GET     = 'GET';
    /**
     * The POST method submits an entity to the specified resource,
     * often causing a change in state or side effects on the server.
     */
    case POST    = 'POST';
    /**
     * The PUT method replaces all current representations of the target resource with the request content.
     */
    case PUT     = 'PUT';
    /**
     * The PATCH method applies partial modifications to a resource.
     */
    case PATCH   = 'PATCH';
    /**
     * The DELETE method deletes the specified resource.
     */
    case DELETE  = 'DELETE';
    /**
     * The PURGE method requests a response identical to a GET request,
     * but discarding cached versions of the resource.
     */
    case PURGE   = 'PURGE';
    /**
     * The OPTIONS method describes the communication options for the target resource.
     */
    case OPTIONS = 'OPTIONS';
    /**
     * The TRACE method performs a message loop-back test along the path to the target resource.
     */
    case TRACE   = 'TRACE';
    /**
     * The CONNECT method establishes a tunnel to the server identified by the target resource.
     */
    case CONNECT = 'CONNECT';

    // WebDAV methods
    case PROPFIND  = 'PROPFIND';
    case PROPPATCH = 'PROPPATCH';
    case MKCOL     = 'MKCOL';
    case COPY      = 'COPY';
    case MOVE      = 'MOVE';
    case LOCK      = 'LOCK';
    case UNLOCK    = 'UNLOCK';

    // BITS method
    case BITS_POST = 'BITS_POST';

    /**
     * Returns a RequestMethod case from a string
     *
     * @param  string   $level The log level to parse
     * @return RequestMethod   The RequestMethod case
     *
     * @throws ValueError      If not associated RequestMethod found
     */
    public static function parse(string $level): RequestMethod {
        return self::from(strtoupper($level));
    }

    /**
     * Try returns a RequestMethod case from a string
     *
     * @param  string      $level The log level to parse
     * @return RequestMethod|null The RequestMethod case, or null if not found
     */
    public static function tryParse(string $level): ?RequestMethod {
        return self::tryFrom(strtoupper($level));
    }
}
