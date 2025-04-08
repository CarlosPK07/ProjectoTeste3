<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Laravel is running!'
    ]);
});
/*
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
*/
/*
Route::get('/check-env', function () {
    try {
        DB::connection()->getPdo();
        return response()->json([
            'DB_HOST' => env('DB_HOST'),
            'DB_DATABASE' => env('DB_DATABASE'),
            'DB_USERNAME' => env('DB_USERNAME'),
            'DB_CONNECTION' => env('DB_CONNECTION'),
            'status' => 'Conexão com BD bem-sucedida! 🎉'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'error' => $e->getMessage()
        ], 500);
    }
});
*/
Route::get('/check-env', function () {
    return response()->json([
        'DB_HOST' => env('DB_HOST'),
        'DB_USERNAME' => env('DB_USERNAME'),
        'DB_PASSWORD' => env('DB_PASSWORD'),
        'APP_ENV' => env('APP_ENV'),
    ]);
});


// TESTE DE LOGS/PERMISSÕES (REMOVA DEPOIS DE TESTAR)
Route::get('/test', function() {
    error_log('TESTANDO LOGS - MENSAGEM VISÍVEL NO PAINEL RAILWAY');
    return response()->json([
        'status' => 'ok',
        'message' => 'Rota de teste funcionando',
        'hora' => now()
    ]);
});
