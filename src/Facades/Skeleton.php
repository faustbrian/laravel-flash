<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Konceiver\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

final class Skeleton extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'skeleton';
    }
}
