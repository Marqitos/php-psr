<?php declare(strict_types = 1);

namespace Psr\Clock;

use DateTimeImmutable;

interface ClockInterface {
    /**
      * Returns the current time as a DateTimeImmutable Object
      */
    public function now(): DateTimeImmutable;
}
