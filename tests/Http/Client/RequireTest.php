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

namespace Psr\Test\Http\Client;

use PHPUnit\Framework\TestCase;

/**
 * Require test class for Psr\Http\Client
 *
 * Verify that all Psr\Http\Client 'require' statements work correctly
 */
class RequireTest extends TestCase {

    /**
     * Test ClientInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Client\ClientInterface
     */
    public function testClientInterface(): void {
        // Not necesary loaded
        // ClientInterface depends RequestInterface
        $existsRequestInterface = interface_exists('Psr\Http\Message\RequestInterface', false);
        // ClientInterface depends ResponseInterface
        $existsResponseInterface = interface_exists('Psr\Http\Message\ResponseInterface', false);
        // RequestInterface and ResponseInterface implements MessageInterface
        $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
        // RequestInterface depends UriInterface
        $existsUriInterface = interface_exists('Psr\Http\Message\UriInterface', false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        $allLoad = $existsRequestInterface &&
            $existsResponseInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsClientInterface = interface_exists('Psr\Http\Client\ClientInterface');
        if (!$allLoad) {
            // ClientInterface depends RequestInterface
            $existsRequestInterface = interface_exists('Psr\Http\Message\RequestInterface', false);
            // ClientInterface depends ResponseInterface
            $existsResponseInterface = interface_exists('Psr\Http\Message\ResponseInterface', false);
            // RequestInterface and ResponseInterface implements MessageInterface
            $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
            // RequestInterface depends UriInterface
            $existsUriInterface = interface_exists('Psr\Http\Message\UriInterface', false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        }
        $allLoad = $existsClientInterface &&
            $existsRequestInterface &&
            $existsResponseInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test NetworkExceptionInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Client\NetworkExceptionInterface
     */
    public function testNetworkExceptionInterface(): void {
        // Not necesary loaded
        // NetworkExceptionInterface extends ClientExceptionInterface
        $existsClientExceptionInterface = interface_exists('Psr\Http\Client\ClientExceptionInterface', false);
        // NetworkExceptionInterface depends RequestInterface
        $existsRequestInterface = interface_exists('Psr\Http\Message\RequestInterface', false);
        // RequestInterface implements MessageInterface
        $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
        // RequestInterface depends UriInterface
        $existsUriInterface = interface_exists('Psr\Http\Message\UriInterface', false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        $allLoad = $existsClientExceptionInterface &&
            $existsRequestInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsNetworkExceptionInterface = interface_exists('Psr\Http\Client\NetworkExceptionInterface');
        if (!$allLoad) {
            // NetworkExceptionInterface extends ClientExceptionInterface
            $existsClientExceptionInterface = interface_exists('Psr\Http\Client\ClientExceptionInterface', false);
            // NetworkExceptionInterface depends RequestInterface
            $existsRequestInterface = interface_exists('Psr\Http\Message\RequestInterface', false);
            // RequestInterface implements MessageInterface
            $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
            // RequestInterface depends UriInterface
            $existsUriInterface = interface_exists('Psr\Http\Message\UriInterface', false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        }
        $allLoad = $existsNetworkExceptionInterface &&
            $existsClientExceptionInterface &&
            $existsRequestInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test RequestExceptionInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Client\RequestExceptionInterface
     */
    public function testRequestExceptionInterface(): void {
        // Not necesary loaded
        // RequestExceptionInterface extends ClientExceptionInterface
        $existsClientExceptionInterface = interface_exists('Psr\Http\Client\ClientExceptionInterface', false);
        // RequestExceptionInterface depends RequestInterface
        $existsRequestInterface = interface_exists('Psr\Http\Message\RequestInterface', false);
        // RequestInterface implements MessageInterface
        $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
        // RequestInterface depends UriInterface
        $existsUriInterface = interface_exists('Psr\Http\Message\UriInterface', false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        $allLoad = $existsClientExceptionInterface &&
            $existsRequestInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsNetworkExceptionInterface = interface_exists('Psr\Http\Client\NetworkExceptionInterface');
        if (!$allLoad) {
            // RequestExceptionInterface extends ClientExceptionInterface
            $existsClientExceptionInterface = interface_exists('Psr\Http\Client\ClientExceptionInterface', false);
            // RequestExceptionInterface depends RequestInterface
            $existsRequestInterface = interface_exists('Psr\Http\Message\RequestInterface', false);
            // RequestInterface implements MessageInterface
            $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
            // RequestInterface depends UriInterface
            $existsUriInterface = interface_exists('Psr\Http\Message\UriInterface', false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        }
        $allLoad = $existsNetworkExceptionInterface &&
            $existsClientExceptionInterface &&
            $existsRequestInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

}