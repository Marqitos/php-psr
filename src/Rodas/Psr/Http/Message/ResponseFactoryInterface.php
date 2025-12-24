<?php
/**
 * This file is part of the Rodas\Psr\Http\Message library
 *
 * Based on Http\Message\ResponseFactoryInterface.php
 * psr/http-factory (Psr\Http\Message) from PHP Framework Interoperability Group
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Rodas\Psr
 * @subpackage psr-http-factory
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/mit The MIT License
 * @link https://marcospor.to/repositories/psr
 */

declare(strict_types=1);

namespace Rodas\Psr\Http\Message;

require_once __DIR__ . '/StatusCode.php';
require_once __DIR__ . '/ResponseInterface.php';

interface ResponseFactoryInterface {
    /**
     * Create a new response.
     *
     * @param StatusCode|int $code HTTP status code; defaults to 200
     * @param string $reasonPhrase Reason phrase to associate with status code
     *     in generated response; if none is provided implementations MAY use
     *     the defaults as suggested in the HTTP specification.
     *
     * @return ResponseInterface
     */
    public function createResponse(StatusCode|int $code = StatusCode::OK, string $reasonPhrase = ''): ResponseInterface;
}
