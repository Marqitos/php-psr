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

require_once __DIR__ . '/StreamInterface.php';
require_once __DIR__ . '/UploadedFileInterface.php';

interface UploadedFileFactoryInterface {
    /**
     * Create a new uploaded file.
     *
     * If a size is not provided it will be determined by checking the size of
     * the file.
     *
     * @see http://php.net/manual/features.file-upload.post-method.php
     * @see http://php.net/manual/features.file-upload.errors.php
     *
     * @param StreamInterface $stream Underlying stream representing the
     *     uploaded file content.
     * @param int|null $size in bytes
     * @param int $error PHP file upload error
     * @param string|null $clientFilename Filename as provided by the client, if any.
     * @param string|null $clientMediaType Media type as provided by the client, if any.
     *
     * @return UploadedFileInterface
     *
     * @throws \InvalidArgumentException If the file resource is not readable.
     */
    public function createUploadedFile(
        StreamInterface $stream,
        ?int $size = null,
        int $error = \UPLOAD_ERR_OK,
        ?string $clientFilename = null,
        ?string $clientMediaType = null
    ): UploadedFileInterface;
}
