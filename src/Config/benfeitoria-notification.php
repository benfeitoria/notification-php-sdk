<?php

/***
 * Benfeitoria notification config files
 */

return [
    "client_id" => env("BENFEITORIA_NOTIFICATION_CLIENT_ID",null),
    "client_secret" => env("BENFEITORIA_NOTIFICATION_CLIENT_ID",null),
    "redirect_uri" => env("BENFEITORIA_NOTIFICATION_REDIRECT_URI",null),

    // Where to store current token
    "token_path" => storage_path("benfeitoria-notification-token.key"),
    "code_path" => storage_path("benfeitoria-notification-code.key"),
];