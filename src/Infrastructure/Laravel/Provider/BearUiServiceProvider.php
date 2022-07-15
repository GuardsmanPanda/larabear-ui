<?php

namespace GuardsmanPanda\LarabearUi\Infrastructure\Laravel\Provider;

use Illuminate\Contracts\Foundation\CachesRoutes;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BearUiServiceProvider extends ServiceProvider {
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->commands(commands: [
            ]);
            //$this->publishes(paths: [__DIR__ . '/../../../../config/config.php' => $this->app->configPath(path: 'bear-ui.php'),], groups: 'bear-ui');
            return;
        }
        Blade::componentNamespace('GuardsmanPanda\\LarabearUi\\Web\\Www\\Shared\\Component', 'bear');
        $this->loadViewsFrom(path: base_path(path: '/vendor/guardsmanpanda/larabear-ui/src/Web/Www/Shared/View'), namespace: 'bear');
        $this->loadViewsFrom(path: base_path(path: '/vendor/guardsmanpanda/larabear-ui/src/Web/Www/Dashboard/View'), namespace: 'bear-dashboard');
        if (! ($this->app instanceof CachesRoutes && $this->app->routesAreCached())) {
            Route::prefix(prefix: 'bear')->middleware(middleware: Config::get(key:'bear.control_panel.middleware') ?? [])->group(function () {
                Route::prefix(prefix: 'dashboard')->group(base_path(path: '/vendor/guardsmanpanda/larabear-ui/src/Web/Www/Dashboard/routes.php'));
            });
        }
    }
}
