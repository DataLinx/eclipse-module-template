<?php

namespace Eclipse\ModuleTemplate\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'module-template:test';

    protected $description = 'Run test command';

    public function handle(): void
    {
        $this->info('You successfully ran this command!');
    }
}
