<?php

namespace Eclipse\ModuleTemplate\Providers;

use Eclipse\Core\Framework\Output\Menu;
use Eclipse\ModuleTemplate\Console\Commands\TestCommand;
use Eclipse\ModuleTemplate\Livewire\MyCounter;
use Exception;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * @throws Exception
     */
    public function boot(Menu $menu): void
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'module-template');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        Route::middleware('web')->prefix('module-template')->group(function () {
            $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        });

        Livewire::component('my-counter', MyCounter::class);

        if (! $this->app->runningInConsole()) {
            $section = new Menu\Section(_('Module template'), null, 'module-template');
            $section->addItem(new Menu\Item(_('Test view'), url('module-template/test')));

            $menu->after(url('users'))->addItem($section);
        } else {
            $this->commands([
                TestCommand::class,
            ]);
        }
    }
}
