<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 24/07/19
 * Time: 17:17
 */

namespace Benfeitoria\Notification\Exceptions;


class NotificationMissingRequiredFieldsException extends \Exception
{
    public function __construct(string $message = "Notification missing required fields", int $code = 401, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}