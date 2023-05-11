<?php

namespace Mgcodeur\LaravelNestedCategory\Commands;

use Illuminate\Console\Command;

class LaravelNestedCategoryCommand extends Command
{
    public $signature = 'laravel-nested-category:install';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
