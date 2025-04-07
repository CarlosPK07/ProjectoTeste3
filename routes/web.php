<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Laravel is running!'
    ]);
});

Route::get('/check-env', function () {
    return response()->json([
        'env' => env('APP_ENV'),
        'debug' => env('APP_DEBUG'),
        'url' => env('APP_URL'),
        'db_connection' => env('DB_CONNECTION'),
        'db_host' => env('DB_HOST'),
        'db_port' => env('DB_PORT'),
        'db_database' => env('DB_DATABASE'),
        'db_username' => env('DB_USERNAME'),
        'db_password' => env('DB_PASSWORD'),
    ]);
});

Route::get('/check-files', function() {
    return [
        'index_exists' => file_exists(public_path('index.php')),
        'htaccess_exists' => file_exists(public_path('.htaccess'))
    ];
});

