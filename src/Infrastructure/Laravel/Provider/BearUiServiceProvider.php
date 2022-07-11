<?php

namespace GuardsmanPanda\LarabearUi\Infrastructure\Laravel\Provider;

use Illuminate\Support\ServiceProvider;

class BearUiServiceProvider extends ServiceProvider {
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->commands(commands: [
            ]);
            //$this->publishes(paths: [__DIR__ . '/../../../../config/config.php' => $this->app->configPath(path: 'bear-ui.php'),], groups: 'bear-ui');
            $this->loadViewsFrom(path: base_path(path: '/../../../Web/Www/Shared/View'), namespace: '');
        }
    }
}
