<?php

namespace Psr\Log;

use Psr\Log\LoggerInterface;

require_once 'Psr/Log/LoggerInterface.php';

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param LoggerInterface $logger
     *
     * @return void
     */
    public function setLogger(LoggerInterface $logger);
}
