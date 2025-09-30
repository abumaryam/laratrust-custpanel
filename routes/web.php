<?php

use Abumaryam\LaratrustCustpanel\Http\Controllers\RoleController;

Route::get('/roles', [RoleController::class, 'index']);
