<?php

return [
    'connections' => [
        'couchbase' => [
            'driver' => 'couchbase',
            'connection_string' => env('COUCHBASE_CONNECTION_STRING'),
            'port' => env('COUCHBASE_DB_PORT', 8091),
            'host' => env('COUCHBASE_DB_HOST', '127.0.0.1'),
            'bucket' => env('COUCHBASE_DB_BUCKET', 'bucket'),
            'username' => env('COUCHBASE_DB_USERNAME', 'Administrator'),
            'password' => env('COUCHBASE_DB_PASSWORD', 'password'),
        ],
    ],
];
