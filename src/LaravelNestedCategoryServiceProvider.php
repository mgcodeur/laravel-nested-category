<?php

namespace Mgcodeur\LaravelNestedCategory;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mgcodeur\LaravelNestedCategory\Commands\LaravelNestedCategoryCommand;

class LaravelNestedCategoryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-nested-category')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-nested-category_table')
            ->hasCommand(LaravelNestedCategoryCommand::class);
    }
}
