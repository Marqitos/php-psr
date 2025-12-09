<?php
/**
 * This file is part of the Psr\Http\Message library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2018 PHP Framework Interoperability Group
 * @license https://opensource.org/license/MIT MIT
 * @link https://www.php-fig.org/psr/psr-17
 */

declare(strict_types=1);

namespace Psr\Http\Message;

require_once __DIR__ . '/RequestInterface.php';

interface RequestFactoryInterface {
    /**
     * Create a new request.
     *
     * @param string $method The HTTP method associated with the request.
     * @param UriInterface|string $uri The URI associated with the request. If
     *     the value is a string, the factory MUST create a UriInterface
     *     instance based on it.
     *
     * @return RequestInterface
     */
    public function createRequest(string $method, $uri): RequestInterface;
}
