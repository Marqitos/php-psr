<?php declare(strict_types=1);

namespace Psr\Log;

require_once 'Psr/Log/LoggerInterface.php';

/**
  * Describes a logger-aware instance.
  */
interface LoggerAwareInterface {
    /**
      * Sets a logger instance on the object.
      */
    public function setLogger(LoggerInterface $logger): void;
}
