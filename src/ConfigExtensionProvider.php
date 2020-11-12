<?php

namespace Larangular\ConfigWriter;

use Illuminate\Support\ServiceProvider;

class ConfigWriterServiceProvider extends ServiceProvider {

    public function register(): void {
        $this->app->singleton('config.extended', function () {
            return new Config($this->app['config']);
        });
    }
}
