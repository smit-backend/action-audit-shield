<?php

return [
    'enabled' => env('ACTION_AUDIT_SHIELD_ENABLED', true),
    'timeout' => env('ACTION_AUDIT_SHIELD_TIMEOUT', 30),
    'log_channel' => env('ACTION_AUDIT_SHIELD_LOG', 'stack'),
];
