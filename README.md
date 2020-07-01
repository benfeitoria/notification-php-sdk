# benfeitoria/notification-php-sdk

Este SDK deve ser utilizado para se comunicar com o
[benfeitoria/notification](https://github.com/benfeitoria/notification).

## Instalação

Para registrar o SDK como dependência utilize o comando:

```
compoer require benfeitoria/notification-php-sdk
```

## Utilização

Registre o **\Benfeitoria\Notification\Services\NotificationService** em sua aplicação.

Após o registro basta referenciar a classe de notificação que deseja disparar a partir do método **send()**:

```php
<?php

app(\Benfeitoria\Notification\Services\NotificationService::class)->send(
    new Benfeitoria\Notification\Notifications\Email10($data)
);
```