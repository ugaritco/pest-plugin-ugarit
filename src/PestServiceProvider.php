<?php

declare(strict_types=1);

namespace Pest\Ugarit;

use Heritage\Support\ServiceProvider;
use Laravel\Dusk\Console\DuskCommand;
use Pest\Ugarit\Commands\PestDatasetCommand;
use Pest\Ugarit\Commands\PestDuskCommand;
use Pest\Ugarit\Commands\PestTestCommand;

final class PestServiceProvider extends ServiceProvider
{
    /**
     * Register Artisan Commands.
     */
    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PestTestCommand::class,
                PestDatasetCommand::class,
            ]);

            if (class_exists(DuskCommand::class)) {
                $this->commands([
                    PestDuskCommand::class,
                ]);
            }
        }
    }
}
