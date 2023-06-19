<?php

namespace FmTod\IdeHelperLaravelActions;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use FmTod\IdeHelperLaravelActions\Commands\IdeHelperLaravelActionsActionsCommand;

class IdeHelperLaravelActionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-actions-ide-helper')
            ->hasConfigFile('ide-helper-actions')
            ->hasCommand(IdeHelperLaravelActionsActionsCommand::class);
    }
}
