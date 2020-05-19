# benfeitoria/notification-php-sdk

Este SDK deve ser utilizado para se comunicar com o
[benfeitoria/notification](https://github.com/benfeitoria/notification).

## Instalação

Para registrar o SDK como dependência utilize o comando:

```
compoer require benfeitoria/notification-php-sdk
```

## Utilização

Crie um service na aplicação PHP que utilizará o SDK extendendo a classe **\Benfeitoria\Notification\NotificationSDK**:

```php
<?php

use Benfeitoria\Notification\NotificationSDK;

class NotificationService extends NotificationSDK
{
    public function __construct()
    {
        parent::__construct(
            app()->environment(),
            env('NOTIFICATION_API_ENDPOINT'),
            storage_path('app/notification-api-token.json'),
            env('NOTIFICATION_API_AUTH_CODE'),
            env('NOTIFICATION_API_CLIENT_ID'),
            env('NOTIFICATION_API_CLIENT_SECRET'),
            env('NOTIFICATION_API_REDIRECT_URI')
        );
    }
}

```

Uma vez que o service estiver criado basta referenciar a classe de notificação que deseja disparar:

```php
<?php

app(NotificationService::class)->send(
    new Benfeitoria\Notification\Notifications\Email10($data)
);
```