<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Monobank Acquiring Laravel Package Configuration
    |--------------------------------------------------------------------------
    |
    | @see https://monobank.ua/api-docs/acquiring
    |
    | api_token - header X-Token
    */

    'api_token' => env('MONOBANK_ACQUIRING_API_KEY', ''),
    'base_url' => env('MONOBANK_ACQUIRING_BASE_URL', 'https://api.monobank.ua/'),
];