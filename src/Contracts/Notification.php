<?php


namespace Benfeitoria\Notification\Contracts;

interface Notification
{
    public function getNotification(): string;

    public function getData(): array ;
}