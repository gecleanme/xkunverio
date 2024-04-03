<?php

namespace gecleanme\Xkunverio\Exceptions;

use InvalidArgumentException;

class InvalidTempUnitException extends InvalidArgumentException
{
    public static function invalidUnit(string $unit): self
    {
        return new self("Invalid temperature unit provided: $unit");
    }
}
