<?php

namespace PierreBarbin\Uuid;

use Illuminate\Filesystem\Filesystem;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use PierreBarbin\Uuid\Commands\UuidCommand;

class UuidServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-uuid')
            ->hasConfigFile()
            ->hasCommand(UuidCommand::class);
    }

    public function packageRegistered()
    {
        if ($this->app['config']['uuid']['override_make_model_command']) {
            $this->app->extend('command.model.make', function () {
                return new UuidCommand($this->app->make(Filesystem::class));
            });
        }
    }
}
