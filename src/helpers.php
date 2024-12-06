<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Flash\Flash;
use BaseCodeOy\Flash\Message;

function flash(
    ?string $message = null,
    ?string $title = null,
    ?string $level = null,
    ?array $config = [],
): Flash {
    /** @var Flash $flash */
    $flash = app(Flash::class);

    if (blank($message)) {
        return $flash;
    }

    $message = new Message($message, $title, $level, $config);

    $flash->flash($message);

    return $flash;
}
