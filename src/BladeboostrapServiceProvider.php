<?php

namespace Akichi139\Bladeboostrap;

use Akichi139\Bladeboostrap\Commands\BladeboostrapCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BladeboostrapServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('bladeboostrap')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(BladeboostrapCommand::class);
    }
}
