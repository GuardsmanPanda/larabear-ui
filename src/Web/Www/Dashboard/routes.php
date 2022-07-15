<?php

use GuardsmanPanda\LarabearUi\Web\Www\Dashboard\Controller\BearDashboardController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [BearDashboardController::class, 'index']);
