<?php


namespace Benfeitoria\Notification\Contracts;

interface Notification
{
    /**
     * Notification constructor.
     * @param array $data
     */
    public function __construct(array $data);

    /**
     * @return string
     */
    public function getNotification(): string;

    /**
     * @return array
     */
    public function getData(): array ;
}