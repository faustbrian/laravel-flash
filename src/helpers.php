<?php

declare(strict_types=1);

use BaseCodeOy\Flash\Flash;
use BaseCodeOy\Flash\Message;

function flash(
    ?string $message = null,
    ?string $title = null,
    ?string $level = null,
    ?array $config = [],
): Flash {
    /** @var \BaseCodeOy\Flash\Flash $flash */
    $flash = app(Flash::class);

    if (blank($message)) {
        return $flash;
    }

    $message = new Message($message, $title, $level, $config);

    $flash->flash($message);

    return $flash;
}
