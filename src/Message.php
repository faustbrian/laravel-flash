<?php

declare(strict_types=1);

namespace PreemStudio\Flash;

use Illuminate\Support\Arr;

class Message
{
    public string $message;

    public ?string $title;

    public ?string $level;

    public ?array $config;

    public function __construct(string $message, ?string $title = '', ?string $level = '', ?array $config = [])
    {
        $this->message = $message;
        $this->title   = $title;
        $this->level   = $level;
        $this->config  = $config;
    }

    public function icon(string $key): array|string
    {
        return Arr::get($this->config, "icon.$key");
    }

    public function class(string $key): string
    {
        return Arr::get($this->config, "classes.$key");
    }

    public function toArray(): array
    {
        return [
            'title'   => $this->title,
            'message' => $this->message,
            'config'  => $this->config,
            'level'   => $this->level,
        ];
    }
}
