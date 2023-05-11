<?php

namespace Mgcodeur\LaravelNestedCategory\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mgcodeur\LaravelNestedCategory\LaravelNestedCategoryServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mgcodeur\\LaravelNestedCategory\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelNestedCategoryServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-nested-category_table.php.stub';
        $migration->up();
        */
    }
}
