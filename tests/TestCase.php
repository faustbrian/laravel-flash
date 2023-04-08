<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Flash\Flash;
use PreemStudio\Jetpack\TestBench\AbstractPackageTestCase;

/**
 * @internal
 */
abstract class TestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass(): string
    {
        return \PreemStudio\Flash\ServiceProvider::class;
    }

    protected function getPackageAliases($app): array
    {
        return ['Flash' => Flash::class];
    }
}
