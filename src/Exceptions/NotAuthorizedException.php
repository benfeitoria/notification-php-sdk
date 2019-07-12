<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/06/19
 * Time: 14:14
 */

namespace Benfeitoria\Notification\Exceptions;


use Throwable;

class NotAuthorizedException extends \Exception
{
    public function __construct(string $message = "Not authorized", int $code = 401, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}