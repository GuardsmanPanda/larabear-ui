<?php

namespace GuardsmanPanda\LarabearUi\Web\Www\Dashboard\Controller;

use Illuminate\Routing\Controller;

class BearDashboardController extends Controller {
    public function index(): string {
        return view(view: 'bear-dashboard::index');
    }
}