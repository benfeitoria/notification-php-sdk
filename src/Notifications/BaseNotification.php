<?php


namespace Benfeitoria\Notification\Notifications;


use Benfeitoria\Notification\Contracts\Notification;

abstract class BaseNotification implements Notification
{
    public $description;

    protected $data;

    /**
     * BaseNotification constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }


    public function getData(): array
    {
        return $this->data;
    }
}