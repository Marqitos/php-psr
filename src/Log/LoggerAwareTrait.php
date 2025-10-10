<?php declare(strict_types=1);

namespace Psr\Log;

require_once __DIR__ . 'LoggerInterface.php';

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
