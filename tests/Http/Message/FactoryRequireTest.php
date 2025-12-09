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

require_once __DIR__ . '/RequireTest.php';

/**
 * Require test class for Psr\Http\Message-Factory
 *
 * Verify that all Psr\Http\Message 'require' statements work correctly
 */
class FactoryRequireTest extends TestCase {

    public const REQUEST_FACTORY_INTERFACE          = 'Psr\Http\Message\RequestFactoryInterface';
    public const RESPONSE_FACTORY_INTERFACE         = 'Psr\Http\Message\ResponseFactoryInterface';
    public const SERVER_REQUEST_FACTORY_INTERFACE   = 'Psr\Http\Message\ServerRequestFactoryInterface';
    public const STREAM_FACTORY_INTERFACE           = 'Psr\Http\Message\StreamFactoryInterface';
    public const UPLOADED_FILE_FACTORY_INTERFACE    = 'Psr\Http\Message\UploadedFileFactoryInterface';

    /**
     * Test RequestFactoryInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\RequestFactoryInterface
     */
    public function testRequestFactoryInterface(): void {
        // Not necessary loaded
        // MessageInterface depends StreamInterface
        $existsStreamInterface = interface_exists(RequireTest::REQUEST_INTERFACE, false);
        $allLoad = $existsStreamInterface;
        // All must be loaded
        $existsMessageInterface = interface_exists(self::REQUEST_FACTORY_INTERFACE);
        if (!$allLoad) {
            // MessageInterface depends StreamInterface
            $existsStreamInterface = interface_exists(RequireTest::REQUEST_INTERFACE, false);
        }
        $allLoad = $existsMessageInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test ResponseFactoryInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\ResponseFactoryInterface
     */
    public function testResponseFactoryInterface(): void {
        // Not necessary loaded
        // ResponseFactoryInterface depends ResponseInterface
        $existsResponseInterface = interface_exists(RequireTest::RESPONSE_INTERFACE, false);
        $allLoad = $existsResponseInterface;
        // All must be loaded
        $existsResponseFactoryInterface = interface_exists(self::RESPONSE_FACTORY_INTERFACE);
        if (!$allLoad) {
            // ResponseFactoryInterface depends ResponseInterface
            $existsResponseInterface = interface_exists(RequireTest::RESPONSE_INTERFACE, false);
        }
        $allLoad = $existsResponseFactoryInterface &&
            $existsResponseInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test ServerRequestFactoryInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\ServerRequestFactoryInterface
     */
    public function testServerRequestFactoryInterface(): void {
        // Not necessary loaded
        // ServerRequestFactoryInterface depends ServerRequestInterface
        $existsServerRequestInterface = interface_exists(RequireTest::SERVER_REQUEST_INTERFACE, false);
        $allLoad = $existsServerRequestInterface;
        // All must be loaded
        $existsServerRequestFactoryInterface = interface_exists(self::SERVER_REQUEST_FACTORY_INTERFACE);
        if (!$allLoad) {
            // ServerRequestFactoryInterface depends ServerRequestInterface
            $existsServerRequestInterface = interface_exists(RequireTest::SERVER_REQUEST_INTERFACE, false);
        }
        $allLoad = $existsServerRequestFactoryInterface &&
            $existsServerRequestInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test StreamFactoryInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\StreamFactoryInterface
     */
    public function testStreamFactoryInterface(): void {
        // Not necessary loaded
        // StreamFactoryInterface depends StreamInterface
        $existsStreamInterface = interface_exists(RequireTest::STREAM_INTERFACE, false);
        $allLoad = $existsStreamInterface;
        // All must be loaded
        $existsStreamFactoryInterface = interface_exists(self::STREAM_FACTORY_INTERFACE);
        if (!$allLoad) {
            // StreamFactoryInterface depends StreamInterface
            $existsStreamInterface = interface_exists(RequireTest::STREAM_INTERFACE, false);
        }
        $allLoad = $existsStreamFactoryInterface &&
            $existsStreamInterface;
        $this->assertTrue($allLoad);
    }

    /**
     * Test UploadedFileFactoryInterface inheritance
     *
     * @return void
     *
     * @covers Psr\Http\Message\UploadedFileFactoryInterface
     */
    public function testUploadedFileFactoryInterface(): void {
        // Not necessary loaded
        // UploadedFileFactoryInterface depends StreamInterface
        $existsStreamInterface = interface_exists(RequireTest::STREAM_INTERFACE, false);
        // UploadedFileFactoryInterface depends UploadedFileInterface
        $existsUploadedFileInterface = interface_exists(RequireTest::UPLOADED_FILE_INTERFACE, false);
        $allLoad = $existsStreamInterface &&
            $existsUploadedFileInterface;
        // All must be loaded
        $existsUploadedFileFactoryInterface = interface_exists(self::UPLOADED_FILE_FACTORY_INTERFACE);
        if (!$allLoad) {
            // UploadedFileFactoryInterface depends StreamInterface
            $existsStreamInterface = interface_exists(RequireTest::STREAM_INTERFACE, false);
            // UploadedFileFactoryInterface depends UploadedFileInterface
            $existsUploadedFileInterface = interface_exists(RequireTest::UPLOADED_FILE_INTERFACE, false);
        }
        $allLoad = $existsUploadedFileFactoryInterface &&
            $existsStreamInterface &&
            $existsUploadedFileInterface;
        $this->assertTrue($allLoad);
    }

}
