<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\InfoController;

Route::prefix('info')->group(function () {
    Route::get('/server', [InfoController::class, 'serverInfo']);
    Route::get('/client', [InfoController::class, 'clientInfo']);
    Route::get('/database', [InfoController::class, 'databaseInfo']);
});

?>
