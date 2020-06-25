<?php

namespace Benfeitoria\Notification\Exceptions;

class NotificationMissingRequiredFieldsException extends \Exception
{
    public function __construct(
        string $message = "Notification missing required fields",
        int $code = 401,
        \Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
