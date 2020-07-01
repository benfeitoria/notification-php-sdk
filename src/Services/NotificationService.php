<?php

namespace Benfeitoria\Notification\Services;

use Benfeitoria\Notification\NotificationSDK;

class NotificationService extends NotificationSDK
{
    public function __construct()
    {
        parent::__construct(
            app()->environment(),
            env('NOTIFICATION_API_ENDPOINT'),
            env('NOTIFICATION_API_PERSONAL_ACCESS_TOKEN')
        );
    }
}
