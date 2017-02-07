<?php

namespace Spatie\Activitylog\Exceptions;

use Exception;
use Spatie\Activitylog\Interfaces\ActivityModelInterface;

class InvalidConfiguration extends Exception
{
    public static function modelIsNotValid(string $className)
    {
        return new static("The given model class `$className` does not implement `".ActivityModelInterface::class.'`');
    }
}
