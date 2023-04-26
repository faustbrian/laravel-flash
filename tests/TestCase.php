<?php

declare(strict_types=1);

namespace Tests;

use BombenProdukt\Flash\Flash;
use BombenProdukt\PackagePowerPack\TestBench\AbstractPackageTestCase;

/**
 * @internal
 */
abstract class TestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass(): string
    {
        return \BombenProdukt\Flash\ServiceProvider::class;
    }

    protected function getPackageAliases($app): array
    {
        return ['Flash' => Flash::class];
    }
}
