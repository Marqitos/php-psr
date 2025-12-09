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
use Psr\Test\Http\Message\RequireTest as MessageRequire;

require_once __DIR__ . '/../Message/RequireTest.php';

/**
 * Require test class for Psr\Http\Client
 *
 * Verify that all Psr\Http\Client 'require' statements work correctly
 */
class RequireTest extends TestCase {

    public const CLIENT_INTERFACE           = 'Psr\Http\Client\ClientInterface';
    public const CLIENT_EXCEPTION_INTERFACE = 'Psr\Http\Client\ClientExceptionInterface';
    public const NETWORK_EXCEPTION_INTERFACE= 'Psr\Http\Client\NetworkExceptionInterface';
    public const REQUEST_EXCEPTION_INTERFACE= 'Psr\Http\Client\RequestExceptionInterface';

    /**
     * Test ClientInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Client\ClientInterface
     */
    public function testClientInterface(): void {
        // Not necessary loaded
        // ClientInterface depends RequestInterface
        $existsRequestInterface = interface_exists(MessageRequire::REQUEST_INTERFACE, false);
        // ClientInterface depends ResponseInterface
        $existsResponseInterface = interface_exists(MessageRequire::RESPONSE_INTERFACE, false);
        // RequestInterface and ResponseInterface implements MessageInterface
        $existsMessageInterface = interface_exists(MessageRequire::MESSAGE_INTERFACE, false);
        // RequestInterface depends UriInterface
        $existsUriInterface = interface_exists(MessageRequire::URI_INTERFACE, false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists(MessageRequire::STREAM_INTERFACE, false);
        $allLoad = $existsRequestInterface &&
            $existsResponseInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsClientInterface = interface_exists(self::CLIENT_INTERFACE);
        if (!$allLoad) {
            // ClientInterface depends RequestInterface
            $existsRequestInterface = interface_exists(MessageRequire::REQUEST_INTERFACE, false);
            // ClientInterface depends ResponseInterface
            $existsResponseInterface = interface_exists(MessageRequire::RESPONSE_INTERFACE, false);
            // RequestInterface and ResponseInterface implements MessageInterface
            $existsMessageInterface = interface_exists(MessageRequire::MESSAGE_INTERFACE, false);
            // RequestInterface depends UriInterface
            $existsUriInterface = interface_exists(MessageRequire::URI_INTERFACE, false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists(MessageRequire::STREAM_INTERFACE, false);
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
        // Not necessary loaded
        // NetworkExceptionInterface extends ClientExceptionInterface
        $existsClientExceptionInterface = interface_exists(self::CLIENT_EXCEPTION_INTERFACE, false);
        // NetworkExceptionInterface depends RequestInterface
        $existsRequestInterface = interface_exists(MessageRequire::REQUEST_INTERFACE, false);
        // RequestInterface implements MessageInterface
        $existsMessageInterface = interface_exists(MessageRequire::MESSAGE_INTERFACE, false);
        // RequestInterface depends UriInterface
        $existsUriInterface = interface_exists(MessageRequire::URI_INTERFACE, false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists(MessageRequire::STREAM_INTERFACE, false);
        $allLoad = $existsClientExceptionInterface &&
            $existsRequestInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsNetworkExceptionInterface = interface_exists(self::NETWORK_EXCEPTION_INTERFACE);
        if (!$allLoad) {
            // NetworkExceptionInterface extends ClientExceptionInterface
            $existsClientExceptionInterface = interface_exists(self::CLIENT_EXCEPTION_INTERFACE, false);
            // NetworkExceptionInterface depends RequestInterface
            $existsRequestInterface = interface_exists(MessageRequire::REQUEST_INTERFACE, false);
            // RequestInterface implements MessageInterface
            $existsMessageInterface = interface_exists(MessageRequire::MESSAGE_INTERFACE, false);
            // RequestInterface depends UriInterface
            $existsUriInterface = interface_exists(MessageRequire::URI_INTERFACE, false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists(MessageRequire::STREAM_INTERFACE, false);
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
        // Not necessary loaded
        // RequestExceptionInterface extends ClientExceptionInterface
        $existsClientExceptionInterface = interface_exists(self::CLIENT_EXCEPTION_INTERFACE, false);
        // RequestExceptionInterface depends RequestInterface
        $existsRequestInterface = interface_exists(MessageRequire::REQUEST_INTERFACE, false);
        // RequestInterface implements MessageInterface
        $existsMessageInterface = interface_exists(MessageRequire::MESSAGE_INTERFACE, false);
        // RequestInterface depends UriInterface
        $existsUriInterface = interface_exists(MessageRequire::URI_INTERFACE, false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists(MessageRequire::STREAM_INTERFACE, false);
        $allLoad = $existsClientExceptionInterface &&
            $existsRequestInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsNetworkExceptionInterface = interface_exists(self::REQUEST_EXCEPTION_INTERFACE);
        if (!$allLoad) {
            // RequestExceptionInterface extends ClientExceptionInterface
            $existsClientExceptionInterface = interface_exists(self::CLIENT_EXCEPTION_INTERFACE, false);
            // RequestExceptionInterface depends RequestInterface
            $existsRequestInterface = interface_exists(MessageRequire::REQUEST_INTERFACE, false);
            // RequestInterface implements MessageInterface
            $existsMessageInterface = interface_exists(MessageRequire::MESSAGE_INTERFACE, false);
            // RequestInterface depends UriInterface
            $existsUriInterface = interface_exists(MessageRequire::URI_INTERFACE, false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists(MessageRequire::STREAM_INTERFACE, false);
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
