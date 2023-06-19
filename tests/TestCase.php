<?php

namespace FmTod\IdeHelperLaravelActions\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use FmTod\IdeHelperLaravelActions\IdeHelperLaravelActionsServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            IdeHelperLaravelActionsServiceProvider::class,
        ];
    }
}
