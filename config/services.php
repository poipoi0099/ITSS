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
    'firebase' => [
    'database_url' => env('FIREBASE_DATABASE_URL', ''),
    'project_id' => env('shibafood-3e0d0', ''),
    'private_key_id' => env('85ddc5887a3193ffc0f0d92c71a204997a09a778', 'your-key'),
    'private_key' => str_replace("\\n", "\n", env('-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDmwef17HL4GXwH\n/EfqpcR+O4tp2V0DQfiuw469dJ1qYvW3EjFxIgmhz6qk51g3sue2ulmroCQF38kQ\nnAQXpiOU5DFm+v14dIWu+64BRydAFtMBNFc/PHqHiVgGkk7as9DpWEfiuMMS/Y7s\nxB4mmAM6KjZnhXhrrXJzvCihUUyT2jsGNasiIRTmvrpCn9Mwu0dIiIH8es19WqLl\nvS5kXdWI4Hv2LjhNGeHoTHzm2+aaE7vfiXCw6gHEMVCZedd9jIWk9Cv96zkW0Qm4\nhXDT5CJrevONyceTqYficCJprp7wRP25PlYQ0Lp21R2e80s7hNpKB5j1JPaFKQcr\nFhAlDaWFAgMBAAECggEAEbm1tzrNTrMqcgnrfkydzjKFutZDDPktgJiDUkNEb5kg\nFcrJzc5sXf0ajGXm7V8KlIs2UHbR0uUF8rGBUPhmmvfNDFjdoo8/e5mtRpTay34A\nAa4twNeaSTyqwdUi8ILH2pIjnM340hsfC585pQOf79Zb7Sd1VhQcirkFMqBmQ6Rm\nSRk/5HxudQgszv5WyUM5xHZ3U/jKbD4mVCH8sGtEA30Gre7VIxywMny0p4WqCHkl\nW0XKax0xrriGVlpVwUFEy1/KdJAWfAwyLmLHToQ++D9M0jGohWcyAM3n5XkKZRS7\nz1N0JaIBiGUDiguppiMKxX6ahtaH8cLAv/SEZW1WqwKBgQD3z4QSiqEcDKsXOsuw\nk70JAu7obaoMtCR566SXHGiOn0t/uJDAMo72y4iFwReicpo6X9EDIfsCf2J3vvo0\nQrjYWfBjXhJ0lzSf2dWtirNQgLt0dFgCC6ymUcaY6xZFKzh8RnPjuXkgbRkD8hi+\na2ablry9Jreb/MwX7z7f7KW2lwKBgQDuYh63r0HIR/ZWQpkhz7fJG0mNOrMI/q3l\nqvHtOgKHCp38dGQhH4985cgrpk48GHbLPTtUXaKET86ZLOnLk6GPLC9zATOhT2TE\n7x9ZT6v1xLJW0xL2jvGQDpg6goFn7QvZodDjq4mmK+E+MVke2sdrPsuxPusfemKw\nU7x0ut+EQwKBgHdEgvZBjmTnm/ikLaCgmlyZ8s4e6bcPhHbBeQfZfmEWPcoM1G4M\nZ05UizKEypE+wwfRUdFGK376PDQR0G4SptBKCS5p+kvu8j71IqhRlxfpvU7BKBJj\n+AZcWU8D5kYIFTmK1wAFJkz69Q03Gb2cB1he5hvLZJdIxhnG5eX0CZWlAoGBAK2D\noCZFnBVDRCwfh8UTpAvvH8d73YuDjWJp3nS1T9epw7tZoPR3O4NG4j/baoDVscpX\nxJKxITU7vf7CsV6sE+HZ4KPOUR1uY8Pw5hmlI17eEI2gT+JFw9D+vpGAIt9ZrNF5\ntkmxt5zLvcT+OId76cHHUI6wZIZiF+mO2dMBnuZvAoGAKF7o3btOk/BQxCCeNWRk\nW2vFGUzUAwctSS5UhbQo5RhwuPEHQ89VMBFqWnqhAZ0oBDwWpJQrz5lI9cWavEdv\nF+96Hj0B7CuEmzppZr9sjVfQLwQCYE/yTdatK51mCE09VSI+xZKn4zCEoe3dEa8u\nDWRL3znk3pP0Fc53uWe7RX0=\n-----END PRIVATE KEY-----\n', '')),
    'client_email' => env('shibafood-3e0d0@appspot.gserviceaccount.com', 'e@email.com'),
    'client_id' => env('106037479498848966965', ''),
    'client_x509_cert_url' => env('https://www.googleapis.com/robot/v1/metadata/x509/shibafood-3e0d0%40appspot.gserviceaccount.com', ''),
    ],

];
