<?php

declare(strict_types=1);

namespace Tests;

use BaseCodeOy\Flash\Flash;
use BaseCodeOy\PackagePowerPack\TestBench\AbstractPackageTestCase;

/**
 * @internal
 */
abstract class TestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass(): string
    {
        return \BaseCodeOy\Flash\ServiceProvider::class;
    }

    protected function getPackageAliases($app): array
    {
        return ['Flash' => Flash::class];
    }
}
