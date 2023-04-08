<?php

declare(strict_types=1);

use PreemStudio\Flash\Flash;
use PreemStudio\Flash\Message;

function flash(
    ?string $message = null,
    ?string $title = null,
    ?string $level = null,
    ?array $config = [],
): Flash {
    /** @var \PreemStudio\Flash\Flash $flash */
    $flash = app(Flash::class);

    if (blank($message)) {
        return $flash;
    }

    $message = new Message($message, $title, $level, $config);

    $flash->flash($message);

    return $flash;
}
