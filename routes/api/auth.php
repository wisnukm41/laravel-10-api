<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'as' => 'api.login.',
    ],
    function () {
        Route::post('login', [AuthController::class, 'login']);

        Route::post('register', [AuthController::class, 'register']);

        // Route::post('send-otp', [AuthController::class, 'resendOtp']);

        // Route::post('verify-otp', [AuthController::class, 'verifyOtp']);
        
        Route::post('logout', [AuthController::class, 'logout'])
            ->middleware(['auth:sanctum']);
        
        Route::post('forgot-password', [AuthController::class, 'forgot_password']);

        // Route::post('{driver}/callback', [AuthController::class, 'callback']);
    }
);