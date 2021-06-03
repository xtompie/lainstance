<?php

namespace Xtompie\Lainstance;

use Illuminate\Support\Facades\App;

trait Instance
{
    public static function instance(): static
    {
        return App::make(static::class);
    }
}
