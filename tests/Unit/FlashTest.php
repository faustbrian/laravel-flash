<?php

declare(strict_types=1);

namespace Tests\Unit;

use PreemStudio\Flash\Flash;
use PreemStudio\Flash\Message;

test('it can set a flash message with a message', function (): void {
    flash('message');

    expect('message')->toBe(flash()->message);
});

test('it can set a flash message with a custom title', function (): void {
    flash('message', 'title');

    expect('message')->toBe(flash()->message);
    expect('title')->toBe(flash()->title);
});

test('it can set a flash message with a custom level', function (): void {
    flash('message', 'title', 'level');

    expect('message')->toBe(flash()->message);
    expect('level')->toBe(flash()->level);
});

test('it can set a flash message with a custom config', function (): void {
    $config = [
        'icon' => [
            'name' => 'heroicon-m-x-circle',
            'class' => 'h-5 w-5 text-red-400',
            'attributes' => [],
        ],
        'classes' => [
            'background' => 'bg-red-50',
            'title' => 'text-red-800',
            'body' => 'text-red-700',
        ],
    ];

    flash('message', 'title', 'level', $config);

    expect('message')->toBe(flash()->message);
    expect($config)->toEqual(flash()->config);
});

test('it can set a flash message from configured levels', function (): void {
    flash()->fromConfig();

    flash('message', 'title', 'error');

    expect('message')->toBe(flash()->message);
    expect([
        'icon' => [
            'name' => 'heroicon-m-x-circle',
            'class' => 'h-5 w-5 text-red-400',
            'attributes' => [],
        ],
        'classes' => [
            'background' => 'bg-red-50',
            'title' => 'text-red-800',
            'body' => 'text-red-700',
        ],
    ])->toEqual(flash()->config);
});

test('the flash function is macroable', function (): void {
    Flash::macro('info', function (string $message) {
        return $this->flash(new Message($message));
    });

    flash()->info('message');

    expect('message')->toBe(flash()->message);
});

test('multiple methods can be added in one go', function (): void {
    Flash::levels(config('flash.levels'));

    flash()->warning('warning');
    expect('warning')->toBe(flash()->message);
    expect(config('flash.levels.warning'))->toBe(flash()->config);

    flash()->error('error');
    expect('error')->toBe(flash()->message);
    expect(config('flash.levels.error'))->toBe(flash()->config);
});

test('it can get the flash level when the level is registered using the macro', function (): void {
    Flash::macro('info', function (string $message) {
        return $this->flashMessage(new Message($message, 'title', 'info'));
    });

    flash()->info('info message');

    expect('info')->toBe(flash()->level);
});

test('it can get the flash level when levels are registering in one go', function (): void {
    Flash::levels(config('flash.levels'));

    flash()->error('error');

    expect('error')->toBe(flash()->level);
});

test('empty flash message returns null', function (): void {
    expect(flash()->message)->toBeNull();
});
