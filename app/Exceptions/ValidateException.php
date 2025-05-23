<?php

namespace App\Exceptions;

use Throwable;

class ValidateException extends \RuntimeException
{
    public function __construct($message, $code = 500, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
