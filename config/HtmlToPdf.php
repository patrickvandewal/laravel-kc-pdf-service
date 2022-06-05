<?php

return [
    'kc_html_to_pdf' => [
        'service_url' => env('KC_HTML_TO_PDF_SERVICE_URL'),
        'callback' => env('KC_HTML_TO_PDF_CALLBACK_URL'),
        'auth_token' => env('KC_TO_HTML_PDF_AUTH_TOKEN'),
    ],
];
