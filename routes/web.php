<?php


use Illuminate\Support\Facades\Route;

use rohsyl\OmegaPlugin\[PluginName]\Http\Controllers\Admin\PluginController;

Route::prefix('admin/plugins/[PluginName]')->group(function() {

    Route::get('/', [PluginController::class, 'index']);

});