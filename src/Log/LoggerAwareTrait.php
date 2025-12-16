<?php
/**
 * This file is part of the Rodas\Psr library
 *
 * Based on Log\LoggerAwareTrait.php
 * Psr\Log from PHP Framework Interoperability Group
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Rodas\Psr
 * @subpackage psr-log
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/mit The MIT License
 * @link https://marcospor.to/repositories/system
 */

declare(strict_types=1);

namespace Rodas\Psr\Log;

require_once __DIR__ . '/LoggerInterface.php';

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait {
    /**
     * The logger instance.
     */
    protected ?LoggerInterface $logger = null;

    /**
     * Sets a logger.
     */
    public function setLogger(LoggerInterface $logger): void {
        $this->logger = $logger;
    }
}
