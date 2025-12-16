<?php
/**
 * This file is part of the Psr\Clock library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2017 PHP Framework Interoperability Group
 * @license https://opensource.org/license/MIT MIT
 * @link https://www.php-fig.org/psr/psr-20
 */

declare(strict_types=1);

namespace Psr\Clock;

use DateTimeImmutable;

interface ClockInterface {
    /**
     * Returns the current time as a DateTimeImmutable Object
     *
     * @return DateTimeImmutable
     */
    public function now(): DateTimeImmutable;
}
