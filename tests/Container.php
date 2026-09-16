<?php

use function Pest\Ugarit\withoutMiddleware;

withoutMiddleware()->get('/')->assertSee('laravel');
