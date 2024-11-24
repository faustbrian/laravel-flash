<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Flash;

use Illuminate\Support\Arr;

final class Message
{
    public function __construct(
        public string $message,
        public ?string $title = '',
        public ?string $level = '',
        public ?array $config = [],
    ) {}

    public function icon(string $key): array|string
    {
        return Arr::get($this->config, "icon.{$key}");
    }

    public function class(string $key): string
    {
        return Arr::get($this->config, "classes.{$key}");
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'message' => $this->message,
            'config' => $this->config,
            'level' => $this->level,
        ];
    }
}
