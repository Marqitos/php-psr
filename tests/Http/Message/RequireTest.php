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

namespace Rodas\Psr\Test\Http\Message;

use PHPUnit\Framework\TestCase;

/**
 * Require test class for Psr\Http\Message
 *
 * Verify that all Psr\Http\Message 'require' statements work correctly
 */
class RequireTest extends TestCase {

    public const MESSAGE_INTERFACE          = 'Rodas\Psr\Http\Message\MessageInterface';
    public const REQUEST_INTERFACE          = 'Rodas\Psr\Http\Message\RequestInterface';
    public const RESPONSE_INTERFACE         = 'Rodas\Psr\Http\Message\ResponseInterface';
    public const SERVER_REQUEST_INTERFACE   = 'Rodas\Psr\Http\Message\ServerRequestInterface';
    public const STREAM_INTERFACE           = 'Rodas\Psr\Http\Message\StreamInterface';
    public const UPLOADED_FILE_INTERFACE    = 'Rodas\Psr\Http\Message\UploadedFileInterface';
    public const URI_INTERFACE              = 'Rodas\Psr\Http\Message\UriInterface';

    /**
     * Test MessageInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\MessageInterface
     */
    public function testMessageInterface(): void {
        // Not necessary loaded
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        $allLoad = $existsStreamInterface;
        // All must be loaded
        $existsMessageInterface = interface_exists(self::MESSAGE_INTERFACE);
        if (!$allLoad) {
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        }
        $allLoad = $existsMessageInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test RequestInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\RequestInterface
     */
    public function testRequestInterface(): void {
        // Not necessary loaded
        // RequestInterface implements MessageInterface
        $existsMessageInterface = interface_exists(self::MESSAGE_INTERFACE, false);
        // RequestInterface depends UriInterface
        $existsUriInterface = interface_exists(self::URI_INTERFACE, false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        $allLoad = $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsRequestInterface = interface_exists(self::REQUEST_INTERFACE);
        if (!$allLoad) {
            // RequestInterface implements MessageInterface
            $existsMessageInterface = interface_exists(self::MESSAGE_INTERFACE, false);
            // RequestInterface depends UriInterface
            $existsUriInterface = interface_exists(self::URI_INTERFACE, false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        }
        $allLoad = $existsRequestInterface &&
            $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test ResponseInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\ResponseInterface
     */
    public function testResponseInterface(): void {
        // Not necessary loaded
        // ResponseInterface implements MessageInterface
        $existsMessageInterface = interface_exists(self::MESSAGE_INTERFACE, false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        $allLoad = $existsMessageInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsResponseInterface = interface_exists(self::RESPONSE_INTERFACE);
        if (!$allLoad) {
            // ResponseInterface implements MessageInterface
            $existsMessageInterface = interface_exists(self::MESSAGE_INTERFACE, false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        }
        $allLoad = $existsResponseInterface &&
            $existsMessageInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test ServerRequestInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\ServerRequestInterface
     */
    public function testServerRequestInterface(): void {
        // Not necessary loaded
        // ServerRequestInterface implements RequestInterface
        $existsRequestInterface = interface_exists(self::REQUEST_INTERFACE, false);
        // RequestInterface implements MessageInterface
        $existsMessageInterface = interface_exists(self::MESSAGE_INTERFACE, false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        $allLoad = $existsRequestInterface &&
            $existsMessageInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsServerRequestInterface = interface_exists(self::SERVER_REQUEST_INTERFACE);
        if (!$allLoad) {
            // ServerRequestInterface implements RequestInterface
            $existsRequestInterface = interface_exists(self::REQUEST_INTERFACE, false);
            // RequestInterface implements MessageInterface
            $existsMessageInterface = interface_exists(self::MESSAGE_INTERFACE, false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        }
        $allLoad = $existsServerRequestInterface &&
            $existsRequestInterface &&
            $existsMessageInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test UploadedFileInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\UploadedFileInterface
     */
    public function testUploadedFileInterface(): void {
        // Not necessary loaded
        // UploadedFileInterface depends StreamInterface
        $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        $allLoad = $existsStreamInterface;
        // All must be loaded
        $existsUploadedFileInterface = interface_exists(self::UPLOADED_FILE_INTERFACE);
        if (!$allLoad) {
            // UploadedFileInterface depends StreamInterface
            $existsStreamInterface = interface_exists(self::STREAM_INTERFACE, false);
        }
        $allLoad = $existsUploadedFileInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

}
