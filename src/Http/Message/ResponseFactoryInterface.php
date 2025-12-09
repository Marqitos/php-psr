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

require_once __DIR__ . '/ResponseInterface.php';

interface ResponseFactoryInterface {
    /**
     * Create a new response.
     *
     * @param int $code HTTP status code; defaults to 200
     * @param string $reasonPhrase Reason phrase to associate with status code
     *     in generated response; if none is provided implementations MAY use
     *     the defaults as suggested in the HTTP specification.
     *
     * @return ResponseInterface
     */
    public function createResponse(int $code = 200, string $reasonPhrase = ''): ResponseInterface;
}
