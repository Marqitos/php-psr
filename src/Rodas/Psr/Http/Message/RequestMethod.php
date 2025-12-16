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
 */
enum RequestMethod: string {
    case HEAD    = 'HEAD';
    case GET     = 'GET';
    case POST    = 'POST';
    case PUT     = 'PUT';
    case PATCH   = 'PATCH';
    case DELETE  = 'DELETE';
    case PURGE   = 'PURGE';
    case OPTIONS = 'OPTIONS';
    case TRACE   = 'TRACE';
    case CONNECT = 'CONNECT';

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
