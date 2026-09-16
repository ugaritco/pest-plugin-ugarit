<?php

namespace Tests;

use Heritage\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../resources/routes.php');
    }
}
