<?php

use TotalVoice\Client as TotalVoiceClient;

return [

    /*
    |---------------------------------------------------------------------------
    | Token
    |---------------------------------------------------------------------------
    |
    | Your TotalVoice API token.
    |
    | Default: null
    |
    */
    'token' => env('TOTAL_VOICE_API_TOKEN', null),

    /*
    |---------------------------------------------------------------------------
    | Base URI
    |---------------------------------------------------------------------------
    |
    | Total base URI API endpoint.
    |
    | Default: https://api2.totalvoice.com.br
    |
    */
    'base_uri' => env('TOTAL_VOICE_BASE_URI', TotalVoiceClient::BASE_URI),

];
