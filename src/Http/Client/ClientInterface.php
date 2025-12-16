<?php
/**
 * This file is part of the Rodas\Psr\Http\Client library
 *
 * Based on Http\Client\ClientInterface.php
 * Psr\Http\Client from PHP Framework Interoperability Group
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Rodas\Psr
 * @subpackage psr-http-client
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/mit The MIT License
 * @link https://marcospor.to/repositories/system
 */

declare(strict_types=1);

namespace Rodas\Psr\Http\Client;

use Rodas\Psr\Http\Message\RequestInterface;
use Rodas\Psr\Http\Message\ResponseInterface;

require_once __DIR__ . '/../Message/RequestInterface.php';
require_once __DIR__ . '/../Message/ResponseInterface.php';

interface ClientInterface {
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(RequestInterface $request): ResponseInterface;
}
