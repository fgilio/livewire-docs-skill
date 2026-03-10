<?php

namespace App\Providers;

use Fgilio\AgentSkillFoundation\Console\Concerns\HidesDevCommands;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    use HidesDevCommands;

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->hideDevCommands();
    }
}
