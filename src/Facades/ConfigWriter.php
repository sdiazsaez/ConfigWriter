<?php

namespace Larangular\ConfigWriter\Facades;

use Illuminate\Support\Facades\Facade;

class ConfigWriter extends Facade {
    protected static function getFacadeAccessor() {
        return 'config.extended';
    }

}
