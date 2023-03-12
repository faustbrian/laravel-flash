<?php

declare(strict_types=1);

namespace PreemStudio\Flash;

use PreemStudio\Jetpack\Package\AbstractServiceProvider;
use PreemStudio\Jetpack\Package\Package;

class FlashServiceProvider extends AbstractServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-flash')
            ->hasConfigFile('laravel-flash')
            ->hasViews();
    }
}
