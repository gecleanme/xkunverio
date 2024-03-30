<?php

namespace gecleanme\Xkunverio;

use gecleanme\Xkunverio\Commands\XkunverioCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class XkunverioServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('xkunverio')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_xkunverio_table')
            ->hasCommand(XkunverioCommand::class);
    }
}
