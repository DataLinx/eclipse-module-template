<?php

use Eclipse\ModuleTemplate\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('test', [TestController::class, 'index']);
});
