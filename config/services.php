<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '235813597607347',
        'client_secret' => 'b69f1c6337a2395ee35072e8185cecb5',
        'redirect' => 'http://127.0.0.1:8000/callback/facebook',
      ], 
      'google' => [
        'client_id' => '51441990396-epu5o4mhdgtceh908qh1jiik94qv9b1j.apps.googleusercontent.com',
        'client_secret' => '1ctEzsVHeZkRuSfthb67vAKL',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
