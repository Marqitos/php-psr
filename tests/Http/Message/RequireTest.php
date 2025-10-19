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

namespace Psr\Test\Http\Message;

use PHPUnit\Framework\TestCase;

/**
 * Require test class for Psr\Http\Message
 *
 * Verify that all Psr\Http\Message 'require' statements work correctly
 */
class RequireTest extends TestCase {

    /**
     * Test MessageInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\MessageInterface
     */
    public function testMessageInterface(): void {
        // Not necesary loaded
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        $allLoad = $existsStreamInterface;
        // All must be loaded
        $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface');
        if (!$allLoad) {
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
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
        // Not necesary loaded
        // RequestInterface implements MessageInterface
        $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
        // RequestInterface depends UriInterface
        $existsUriInterface = interface_exists('Psr\Http\Message\UriInterface', false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        $allLoad = $existsMessageInterface &&
            $existsUriInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsRequestInterface = interface_exists('Psr\Http\Message\RequestInterface');
        if (!$allLoad) {
            // RequestInterface implements MessageInterface
            $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
            // RequestInterface depends UriInterface
            $existsUriInterface = interface_exists('Psr\Http\Message\UriInterface', false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
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
        // Not necesary loaded
        // ResponseInterface implements MessageInterface
        $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        $allLoad = $existsMessageInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsResponseInterface = interface_exists('Psr\Http\Message\ResponseInterface');
        if (!$allLoad) {
            // ResponseInterface implements MessageInterface
            $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
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
        // Not necesary loaded
        // ServerRequestInterface implements RequestInterface
        $existsRequestInterface = interface_exists('Psr\Http\Message\RequestInterface', false);
        // RequestInterface implements MessageInterface
        $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        $allLoad = $existsRequestInterface &&
            $existsMessageInterface &&
            $existsStreamInterface;
        // All must be loaded
        $existsServerRequestInterface = interface_exists('Psr\Http\Message\ServerRequestInterface');
        if (!$allLoad) {
            // ServerRequestInterface implements RequestInterface
            $existsRequestInterface = interface_exists('Psr\Http\Message\RequestInterface', false);
            // RequestInterface implements MessageInterface
            $existsMessageInterface = interface_exists('Psr\Http\Message\MessageInterface', false);
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
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
        // Not necesary loaded
        // UploadedFileInterface depends StreamInterface
        $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        $allLoad = $existsStreamInterface;
        // All must be loaded
        $existsUploadedFileInterface = interface_exists('Psr\Http\Message\UploadedFileInterface');
        if (!$allLoad) {
            // UploadedFileInterface depends StreamInterface
            $existsStreamInterface = interface_exists('Psr\Http\Message\StreamInterface', false);
        }
        $allLoad = $existsUploadedFileInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

}
