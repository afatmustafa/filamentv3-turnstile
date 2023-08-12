<?php

namespace Afatmustafa\FilamentTurnstile;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentTurnstilePlugin implements Plugin
{
    public function getId(): string
    {
        return 'filamentv3-turnstile';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }
}
