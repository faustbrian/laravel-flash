<?php

declare(strict_types=1);

namespace Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use PreemStudio\Flash\Flash;
use PreemStudio\Flash\FlashServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [FlashServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return ['Flash' => Flash::class];
    }
}
