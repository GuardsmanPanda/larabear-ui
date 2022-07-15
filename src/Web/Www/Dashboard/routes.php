<?php

use GuardsmanPanda\Larabear\Web\Dashboard\Controller\BearDashboardController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [BearDashboardController::class, 'index']);
