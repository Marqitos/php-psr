<?php
/**
 * This file is part of the Psr\Http\Client library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2017 PHP Framework Interoperability Group
 * @license https://opensource.org/license/MIT MIT
 * @link https://www.php-fig.org/psr/psr-18
 */

declare(strict_types=1);

namespace Psr\Http\Client;

use Psr\Http\Message\RequestInterface;

require_once __DIR__ . '/ClientExceptionInterface.php';
require_once __DIR__ . '/../Message/RequestInterface.php';

/**
 * Thrown when the request cannot be completed because of network issues.
 *
 * There is no response object as this exception is thrown when no response has been received.
 *
 * Example: the target host name can not be resolved or the connection failed.
 */
interface NetworkExceptionInterface extends ClientExceptionInterface {
    /**
     * Returns the request.
     *
     * The request object MAY be a different object from the one passed to ClientInterface::sendRequest()
     *
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface;
}
