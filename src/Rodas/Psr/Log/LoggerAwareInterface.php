<?php
/**
 * This file is part of the Rodas\Psr library
 *
 * Based on Log\LoggerAwareInterface.php
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
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface {
    /**
     * Sets a logger instance on the object.
     */
    public function setLogger(LoggerInterface $logger): void;
}
