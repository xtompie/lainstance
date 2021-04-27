<?php

namespace Xtompie\Lainstance;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        App::resolving(function ($object, $app) {
            if ($object instanceof Shared) {
                App::instance(get_class($object), $object);
            }
        });        
    }
}
