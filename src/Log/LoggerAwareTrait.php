<?php

namespace Psr\Log;

use Psr\Log\LoggerInterface;

require_once 'Psr/Log/LoggerInterface.php';

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait {
    /**
     * The logger instance.
     *
     * @var LoggerInterface|null
     */
    protected $logger;

    /**
     * Sets a logger.
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
