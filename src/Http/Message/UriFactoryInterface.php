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

require_once __DIR__ . '/UriInterface.php';

interface UriFactoryInterface {
    /**
     * Create a new URI.
     *
     * @param string $uri
     *
     * @return UriInterface
     *
     * @throws \InvalidArgumentException If the given URI cannot be parsed.
     */
    public function createUri(string $uri = ''): UriInterface;
}
