<?php

namespace gecleanme\Xkunverio;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use gecleanme\Xkunverio\Commands\XkunverioCommand;

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
