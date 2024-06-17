<?php

namespace KinDigi\Country;

use KinDigi\Country\Commands\CountryCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CountryServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-country')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-country_table')
            ->hasCommand(CountryCommand::class);
    }
}
