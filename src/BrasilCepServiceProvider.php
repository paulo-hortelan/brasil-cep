<?php

namespace Paulo Hortelan\BrasilCep;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Paulo Hortelan\BrasilCep\Commands\BrasilCepCommand;

class BrasilCepServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('brasil-cep')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_brasil_cep_table')
            ->hasCommand(BrasilCepCommand::class);
    }
}
