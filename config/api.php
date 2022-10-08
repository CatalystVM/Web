<?php

use Illuminate\Support\Facades\Facade;

return [

    'whmcs' => [
        'url' => env('WHMCS_API_URL'),
        'identifier' => env('WHMCS_API_IDENTIFIER'),
        'secret' => env('WHMCS_API_SECRET')
    ]

];
